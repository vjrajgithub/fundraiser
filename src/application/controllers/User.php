<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * It deals with end user work flow.
 */
class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('userModel');
    }

    public function login() {
        $this->load->model('pageHelpers');
        $this->load->helper(['form', 'url']);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('uemail', 'Email address', 'trim|required');
        $this->form_validation->set_rules('upass', 'Password', 'trim|required',
            ['required' => 'You must provide a %s.']);
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            if ($this->form_validation->run() === true) {
                // Get all POST items with XSS filter.
                $post = $this->input->post(null, true);
                $this->load->model('auth');
                $result = $this->auth->login($post['uemail'], $post['upass']);
                if ($result) {
                   redirect('home');
                }
            }
        }
        $meta = ['title' => 'Weeboon'];
        $meta['stylsheets'] = $this->pageHelpers->getSharedStylesheets();
        $meta['jsFiles'] = $this->pageHelpers->getSharedJsFiles();
        $meta['jsFiles'][] = 'sbfront.js';
        $data = [];

        // Call views.
        $this->parser->parse('header', $meta);
        $this->load->view('user/login', $data);
        $this->parser->parse('footer', $meta);
    }

    public function signUp() {
        if ($this->input->server('REQUEST_METHOD') !== 'POST') {
           $data['status'] = 'OK';
           $data['msg'] = '';
           $data['redirect'] = site_url('home');
        } else {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('fname', 'First name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email address', 'trim|required|callback_isEmailExist');
            $this->form_validation->set_message('is_unique', 'Someone already registred with this email. Try another.');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            if($this->form_validation->run() == false) {
                // Field validation failed.
                $data['status'] = 'ERROR';
                $data['msg'] = validation_errors();
            } else {
               $post = $this->input->post(null, true);
               $result = $this->userModel->addUpdate($post, 'add');
               $data['status'] = 'OK';
               $data['msg'] = 'Profile created.';
               $data['redirect'] = site_url('user/veryfyEmail');
            }
        }
        apiOk($data);
    }

    public function isEmailExist($email) {
        $result = $this->userModel->getByEmail($email);
        if (count($result)) {
            $this->form_validation->set_message('isEmailExist', 'Someone already registred with this email. Try another.');
            return false;
        }
        return true;
    }

    public function signOut() {
        $_SESSION = [];
        session_destroy();
        setcookie(session_name(), '' , time() -3600);
        redirect('home', 'refresh');
    }

    public function veryfyEmail() {
        $currentUser = $this->userModel->currentUser();
        if(!$currentUser || $this->userModel->isCurrentUserActive()) {
            redirect('home', 'refresh');
        }
        $this->load->model('MessageModel', 'message');
        $this->message->verifyEmail($currentUser['email'], $currentUser['firstName']);
        $this->load->model('pageHelpers');
        $this->load->helper(['form', 'url']);

        $meta = ['title' => 'Verify email'];
        $meta['stylsheets'] = $this->pageHelpers->getSharedStylesheets();
        $meta['jsFiles'] = $this->pageHelpers->getSharedJsFiles();
        $meta['jsFiles'][] = 'sbfront.js';
        $data = ['currentUser' => $currentUser];

        // Call views.
        $this->parser->parse('header', $meta);
        $this->load->view('user/verifyEmail', $data);
        $this->parser->parse('footer', $meta);
    }
}