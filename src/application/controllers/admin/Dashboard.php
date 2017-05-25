<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    /**
     * Show Dashboard.
     */
    public function index() {
        $this->load->model('pageHelpers');
        $head = array('title' => 'Dashboard');
        $head['stylsheets'] = $this->pageHelpers->getSharedStylesheets(true);
        $footer = array();
        // Call views.
        $this->parser->parse('header', $head);
        $this->load->view('admin/dashboard');
        $this->parser->parse('footer', $footer);
    }
}