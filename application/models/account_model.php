<?php

class account_model extends CI_Model {
    
    public function __construct() {
        $this->load->database();
    }
    
    public function logIn($email,$pass) {
        
        $array = array('email' => $email, 'password' => $pass);
        $query = $this->db->get_where('users', $array);
        if($query->num_rows() != 1) {
            return false;
        } else {
            $row = $query->row();
            return $row->id;
        }
    }
    
    public function getInfo($id) {
        
        $query = $this->db->get_where('users',array('id' => $id));
        if($query->num_rows() != 1) {
            return false;
        } else {
            return $row->row_array();
        }
    }
    
    public function allAdmins() {
        $query = $this->db->get('users');
        return $query->result_array();
    }
    
    public function can_log_in()
    {
        $this->db->where('email',$this->input->post('email'));
        $this->db->where('password',md5($this->input->post('password')));
        
        $query = $this->db->get('users');
        if($query->num_rows() == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>