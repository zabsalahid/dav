<?php

class Access extends CI_Controller {
    
    public function __construct()
    {
        parent:: __construct();
    }
    
    public function index()
    {
    
    }
    
    public function login()
    {
        $this->load->view('account/login');
    }
    
    public function login_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required|trim||xss_clean|valid_email|callback_valid_credentials');
        $this->form_validation->set_rules('password', 'Password', 'required|md5');
        
        if($this->form_validation->run())
        {
            $this->load->model('access_model');
            $id = $this->access_model->get_id();
            $data = array(
                          'id' => $id,
                          'is_logged_in' => 1
                          );
            $this->session->set_userdata($data);
            redirect();
        }
        else
        {
            $this->load->view('account/login');
        }
    }
    
    public function valid_credentials()
    {
        $this->load->model('access_model');
        
        if($this->access_model->login())
        {
            return true;
        }
        else
        {
            $this->form_validation->set_message('valid_credentials','Incorrect Email/Password.');
            return false;
        }
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }
}
?>