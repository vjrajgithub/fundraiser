<?php
Class Auth extends CI_Model {
    public function login($email, $password){
        $this->load->database();
        // if some heavy php logic comes.
        //$this->db->reconnect();
        $password = crypt($password, $email);
        $sql = "SELECT user_id, first_name, last_name, gender, email, role, statusd, last_active FROM sb_users WHERE email = '$email' AND password = '$password'";
        $query = $this->db->query($sql);
        $user = [];
        if($query->num_rows()) {
            $user = uToC((array) $query->row());
        }
        $query->free_result();
        if ($user) {
            $this->setUserSession($user);
            return true;
        }
        return false;
   }
   
   public function setUserSession($data) {
        $this->session->set_userdata('sbAuth', $data);
   }
}