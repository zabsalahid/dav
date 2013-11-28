<?php

class Account extends CI_Controller {
    
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('account_model');
    }
    
    public function index()
    {
        $this->load->view('templates/home');
    }
    
    public function log_in()
    {
        $this->load->view('templates/login');
    }
    
    public function login_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required|trim|xss_clean|callback_validate_credentials');
        $this->form_validation->set_rules('password','Password','required|md5');
        
        if($this->form_validation->run())
        {
            $data = array(
                          'email' => $this->input->post('email'),
                          'is_logged_in' => 1
                          );
            $this->session->set_userdata($data);
            redirect('account/success');
        }
        else
        {
            $this->load->view('templates/login');
        }
    }
   
    public function validate_credentials()
    {
        $this->load->model('account_model');
        if($this->account_model->can_log_in())
        {
            return true;
        }
        else
        {
            $this->form_validation->set_message('validate_credentials','Incorrect Username/Password.');
            return false;
        }
    }
    
    public function success()
    {
        if($this->session->userdata('is_logged_in'))
        {
            $this->load->view('templates/success');
        }
        else
        {
            redirect('account/restricted');
        }
    }
    
    public function restricted()
    {
        $this->load->view('templates/restricted');
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('account/index');
    }
    
    public function signup()
    {
        $this->load->view('templates/signup');
        
    }
     
    public function signup_validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password','Password', 'required|trim');
        $this->form_validation->set_rules('cpassword','Confirm Password', 'required|trim|matches[password]');
        $this->form_validation->set_message('is_unique','That email address already exists.');
        
        if($this->form_validation->run())
        {
            //generrate a random key
            $key = md5(uniqid());
            $this->load->library('email', array('mailtype'=>'html'));
            $this->email->from('oohlalaitskarla@gmail.com','Karla');
            $this->email->to($this->input->post('email'));
            $this->email->subject('Confirm your Account. ||DAVALERT');
            
            $message = "<p>Thank You for signing up! </p>";
            $message .= "<p><a href='".base_url()."main/register_user/$key'>Click to Confirm your Account</a></p>";
            $this->email->message($message);
            
            if($this->email->send())
            {
                echo 'This email has been sent!';
                $this->load->model('account/'); //part 11
            }
            else echo 'Could not send the email';
            
            //send and email to the user
            //add them to the temp_users db
            
        }
        else
        {
            $this->load->view('templates/signup');
        }
    }
}
?>