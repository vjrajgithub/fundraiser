<?php
class Home extends CI_Controller {
    public function index() {
        $signedIn = false;
        if($this->session->userdata('sbAuth')) {
            $signedIn = true;
        }
        $this->load->helper(['form', 'url']);
        $this->load->model('pageHelpers');
        $meta = array('title' => 'Weeboon');
        $meta['stylsheets'] = $this->pageHelpers->getSharedStylesheets();
        $meta['jsFiles'] = $this->pageHelpers->getSharedJsFiles();
        $meta['jsFiles'][] = 'sbfront.js';
        $data = ['signedIn' => $signedIn];
        // Call views.
        $this->parser->parse('header', $meta);
        $this->load->view('home/default', $data);
        $this->parser->parse('footer', $meta);
        //$this->output->cache(10);
    }
}
