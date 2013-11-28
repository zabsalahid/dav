<?php

class Admins extends CI_Controller {
    
    public function __construct()
    {
        parent:: __construct();
    }
    
    public function index()
    {
        $data1 = $this->header_access();
        $this->load->view('template/header.php',$data1);
        $this->load->view('account/admins');
        $data = $this->footer_access();
        $this->load->view('template/footer.php',$data);
    }
}
?>