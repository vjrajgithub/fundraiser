<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campaign extends CI_Controller {
    /**
     * Show campaign details.
     */
    public function detail($campaignId) {
        //echo 'shwo campaing details' . __FILE__;
        //pre($campaignId);
        $this->load->model('pageHelpers');
        $head = array('title' => 'Configuration');
        $head['stylsheets'] = $this->pageHelpers->getSharedStylesheets();
        $footer = array();

        // Call views.
        $this->parser->parse('header', $head);
        $this->load->view('campaign/detail');
        //$this->parser->parse('footer', $footer);

    }
}