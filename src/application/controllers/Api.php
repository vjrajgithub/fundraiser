<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Api extends CI_Controller {
    public function confirm($email, $salt) {
        $email = urldecode($email);
        $mySalt = crypt($email, 'www.shiftboolean.com');
        if ($mySalt == $salt) {
            $this->load->model('UserModel', 'user');
            $this->load->model('Auth');
            $this->user->activateByEmail($email);
            $user = $this->user->getByEmail($email);
            $this->Auth->setUserSession($user);
            redirect('home', 'refresh');
        }
    }
}