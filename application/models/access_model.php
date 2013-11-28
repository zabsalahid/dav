<?php

class Access_model extends CI_Model {
    
    public function __construct()
    {
        $this->load->database();
    }
    
    public function login()
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
    
    public function get_id()
    {
        $query = $this->db->get_where('users', array('email' => $this->input->post('email')));
        $row = $query->row();
        return $row->id;
    }
    
    public function get_info()
    {
        $id = $this->session->userdata('id');
        
        $query = $this->db->get_where('users',array('id' => $id));
        if($query->num_rows() != 1)
        {
            return false;
        }
        else
        {
            return $query->row_array();
        }
    }
}
?>