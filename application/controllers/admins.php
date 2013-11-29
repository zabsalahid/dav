<?php

class Admins extends CI_Controller {
    
    public function __construct()
    {
        parent:: __construct();
    }
    
    public function profile()
    {
        if($this->session->userdata('is_logged_in') == 1 )
        {
            $data1 = $this->header_access();
            $this->load->view('template/header.php',$data1);
            
            $this->load->model('access_model');
            $x = $this->access_model->get_info();
            $data = array('fname' => $x['fname'], 'lname' => $x['lname'], 'mi' => $x['mi'], 'email' => $x['email']);
            if($x['type'] == 1) $data['type'] = 'First Type';
            else if($x['type'] == 2) $data['type'] = 'Second Type';
            if($x['gender'] == 1) $data['gend'] = 'Male';
            else if($x['gender'] == 0) $data['gend'] = 'Female';
            $this->load->view('account/profile',$data);
            
            $data2 = $this->footer_access();
            $this->load->view('template/footer.php',$data2);
        }
        else redirect();
    }
    
    public function edit_profile()
    {
        echo 'hello ';
    }
}
?>