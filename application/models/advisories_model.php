<?php

class Advisories_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_advisories()
    {
        $query = $this->db->get('advisories_h');
        $data = $query->result_array();
        return $data;
    }
    
    public function advisories()
    {
        //check date and time
        //get all advisories and coordinates
        
        //$query = $this->db->get('advisories');
        
        $query = $this->db->get('advisories');
        $data = $query->result_array();
        return $data;
    }
    
    public function coordinates($id)
    {
        $query = $this->db->get_where('coordinates', array('adv_id' => $id));
        $data = $query->result_array();
        return $data;
    }
}
?>