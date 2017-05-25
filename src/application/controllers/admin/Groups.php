<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Groups extends CI_Controller {
    /**
     * Show Dashboard.
     */
    public function index() {
        $this->load->model('pageHelpers');
        $head = array('title' => 'Configuration');
        $head['stylsheets'] = $this->pageHelpers->getSharedStylesheets(true);
        $footer = array();
        // Call views.
        $this->parser->parse('header', $head);
        $this->load->view('admin/groups');
        $this->parser->parse('footer', $footer);
    }
}