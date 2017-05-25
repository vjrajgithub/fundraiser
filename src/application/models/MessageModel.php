<?php
Class MessageModel extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->library('email');           
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = true;
        $config['useragent'] = site_url();
        $this->email->initialize($config);
        $this->email->from('info@funds.sb.com', 'Info'); 
    }
    
    public function verifyEmail($email, $name) {
        $this->email->to($email);
        $this->email->subject('Confirm your email.');
        $salt = crypt($email, 'www.shiftboolean.com');
        $link = site_url('api/confirm') . '/' . urlencode($email) . '/' . $salt;
        $body = $this->verifyEmailBody($name, $link);
        $this->email->message($body);
        if($this->email->send()) {
           $message =  'Email sent.';
        } else {
            // Only for development phase.
            show_error($this->email->print_debugger());
        }
    }
    
    private function verifyEmailBody($name, $link) {
        $data = [
            'verifyEmailLink' => $link,
            'toName' => $name,
        ];
        return $this->load->view('mail/verifyEmail', $data, true);        
    }
}
