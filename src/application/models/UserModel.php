<?php
Class UserModel extends CI_Model {
    const MEMBER = 'member';

    const STATUS_ACTIVE = 'active';

    const STATUS_INACTIVE = 'inactive';

    const STATUS_DELETED = 'deleted';

    public function __construct() {
        $this->load->database();
    }

    public function addUpdate($post, $action){
        $prop = [
            'first_name' => $post['fname'],
            'last_name' => $post['lname'],
            'email' => $post['email'],
            'password' => crypt($post['password'], $post['email']),
            'role' => self::MEMBER,
            'status' => self::STATUS_INACTIVE,
            'created_date' => now(),
            'updated_date' => now(),
        ];
        $this->db->set($prop);
        if ($action === 'add') {
            $this->db->insert('sb_users');
            $result = $this->db->insert_id();
        } else {
            $this->db->where('user_id', $userId);
            $result = $this->db->update('sb_users');
        }
        $this->load->model('Auth');
        $user = $this->getByEmail($post['email']);
        $this->Auth->setUserSession($user);
    }

    public function currentUser() {
        return $this->session->userdata('sbAuth');
    }

    public function getByEmail($email) {
        $this->db->select(['user_id','role','status', 'first_name', 'last_name', 'gender', 'email','last_active']);
        $this->db->from('sb_users');
        $this->db->where('email', $email);
        $query = $this->db->get();
        $results = [];
        if($query->num_rows()) {
            $results = uToC((array) $query->row());
        }
        $query->free_result();
        return $results;
    }

    public function isCurrentUserActive() {
        $status = ifseta($this->session->userdata('sbAuth'), 'status');
        return ($status === 'active');
    }

    public function activateByEmail($email) {
        $this->db->set('status', self::STATUS_ACTIVE);
        $this->db->where('email', $email);
        return $this->db->update('sb_users');
    }
}