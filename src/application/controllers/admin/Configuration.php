<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuration extends CI_Controller {
    public function __construct() {
       parent::__construct();
       $this->load->model('pageHelpers');
    }
    
    /**
     * Show configuration.
     */
    public function index() {
        $head = array('title' => 'Configuration');
        $head['stylsheets'] = $this->pageHelpers->getSharedStylesheets(true);
        $footer = array();
        // Call views.
        $this->parser->parse('header', $head);
        $this->load->view('admin/configuration');
        $this->parser->parse('footer', $footer);
    }

    public function options() {
        $head = array('title' => 'Configuration');
        $head['stylsheets'] = $this->pageHelpers->getSharedStylesheets(true);
        $footer = array();
        // Call views.
        $this->parser->parse('header', $head);
        $this->load->view('admin/configuration/options');
        $this->parser->parse('footer', $footer);
    }

    public function categories() {
        $head = array('title' => 'Configuration');
        $head['stylsheets'] = $this->pageHelpers->getSharedStylesheets(true);
        $footer = array();
        // Call views.
        $this->parser->parse('header', $head);
        $this->load->view('admin/configuration/categories');
        $this->parser->parse('footer', $footer);
    }

    public function appearance() {
        $head = array('title' => 'Configuration');
        $head['stylsheets'] = $this->pageHelpers->getSharedStylesheets(true);
        $footer = array();
        // Call views.
        $this->parser->parse('header', $head);
        $this->load->view('admin/configuration/appearance');
        $this->parser->parse('footer', $footer);
    }

    public function contributions() {
        $head = array('title' => 'Configuration');
        $head['stylsheets'] = $this->pageHelpers->getSharedStylesheets(true);
        $footer = array();
        // Call views.
        $this->parser->parse('header', $head);
        $this->load->view('admin/configuration/contributions');
        $this->parser->parse('footer', $footer);
    }

    public function sharing() {
        $head = array('title' => 'Configuration');
        $head['stylsheets'] = $this->pageHelpers->getSharedStylesheets(true);
        $footer = array();
        // Call views.
        $this->parser->parse('header', $head);
        $this->load->view('admin/configuration/sharing');
        $this->parser->parse('footer', $footer);
    }

    public function badges() {
        $head = array('title' => 'Configuration');
        $head['stylsheets'] = $this->pageHelpers->getSharedStylesheets(true);
        $footer = array();
        // Call views.
        $this->parser->parse('header', $head);
        $this->load->view('admin/configuration/badges');
        $this->parser->parse('footer', $footer);
    }

    public function fields() {
        $head = array('title' => 'Configuration');
        $head['stylsheets'] = $this->pageHelpers->getSharedStylesheets(true);
        $footer = array();
        // Call views.
        $this->parser->parse('header', $head);
        $this->load->view('admin/configuration/fields');
        $this->parser->parse('footer', $footer);
    }

    public function language() {
        $head = array('title' => 'Configuration');
        $head['stylsheets'] = $this->pageHelpers->getSharedStylesheets(true);
        $footer = array();
        // Call views.
        $this->parser->parse('header', $head);
        $this->load->view('admin/configuration/language');
        $this->parser->parse('footer', $footer);
    }
}