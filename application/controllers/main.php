<?php
//include('access.php');

//class Main extends Access {
class Main extends CI_Controller {
    
    public function __construct()
    {
        parent:: __construct();
    }
    
    public function index()
    {
        $data1 = $this->header_access();
        $this->load->view('template/header.php',$data1);
        $this->load->view('template/home');
        $data = $this->footer_access();
        $this->load->view('template/footer.php',$data);
    }
    
    public function admins()
    {
        if(!$this->sessions->userdata('is_logged_in')) redirect('');
        else
        {
            $data1 = $this->header_access();
            $this->load->view('template/header.php',$data1);
            $this->load->view('account/admins');
            $data = $this->footer_access();
            $this->load->view('template/footer.php',$data);
        }
    }
    
    public function profile()
    {
        $data1 = $this->header_access();
        $this->load->view('template/header.php',$data1);
        $this->load->view('account/profile');
        $data = $this->footer_access();
        $this->load->view('template/footer.php',$data);
    }
    
    public function road_advisories()
    {
        if($this->session->userdata('is_logged_in'))
        {
            $data1 = $this->header_access();
            $this->load->view('template/header.php',$data1);
            $this->load->view('template/road_advisories_a');
            $data = $this->footer_access();
            $this->load->view('template/footer.php',$data);
        }
        else redirect('');
    }
    
    public function footer_access()
    {
        if($this->session->userdata('is_logged_in') == 1)
        {
            $data = array('src' => 'logout', 'access' => 'Log Out');
            return $data;
        }
        else
        {
            $data = array('src' => 'login', 'access' => 'Log In');
            return $data;
        }
    }
    
    public function header_access()
    {
        if($this->session->userdata('is_logged_in') == 1 )
        {
            $this->load->model('access_model');
            $x = $this->access_model->get_info();
            //$data = array('fname' => $x['fname'], 'lname' => $x['lname']);
            return $x;
        }
    }
    
}
?>