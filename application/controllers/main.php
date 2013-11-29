<?php
//include('access.php');

//class Main extends Access {
class Main extends CI_Controller {
    
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('access_model');
        $this->load->model('advisories_model');
    }
    
    public function index()
    {
        $data1 = $this->header_access();
        $this->load->view('template/header.php',$data1);
        
        $this->load->advisories_model->get_advisories();
        $data['advisories'] = $this->advisories_model->get_advisories();
        $this->load->view('template/home',$data);
        $data = $this->footer_access();
        $this->load->view('template/footer.php',$data);
    }
    
    public function admins()
    {
        if($this->session->userdata('is_logged_in'))
        {
            $data1 = $this->header_access();
            $this->load->view('template/header.php',$data1);
            
            $x['admins'] = $this->access_model->get_all_admins();
            $this->load->view('account/admins',$x);
            
            $data2 = $this->footer_access();
            $this->load->view('template/footer.php',$data2);
        }
        else redirect();
    }
    
    public function profile()
    {
        if($this->session->userdata('is_logged_in') == 1 )
        {
            $data1 = $this->header_access();
            $this->load->view('template/header.php',$data1);
            
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
        else redirect();
    }
    
    public function sample()
    {
        /*echo date('d/m/Y - H:ia').'<br>';
        echo date('Y-m-d H:i');
        */
        /*echo '<pre>';
        print_r($this->advisories_model->get_advisories());
        echo '</pre>';
        
        /*echo '<pre>';
        print_r($this->advisories_model->advisories());
        echo '</pre>';*/
        
        
        /*foreach($this->advisories_model->advisories() as $adv)
        {
            $data = array
            (
                'adv_id' => $adv['adv_id'],
                'desc' => $adv['description'],
                'type' => $adv['type'],
                'timestamp' => $adv['timestamp'],
                'from' => $adv['from'],
                'to' => $adv['to']
            );
            $coords = $this->advisories_model->coordinates($adv['adv_id']);
            $count = count($coords);
            for($x=0;$x<$count;$x++)
            {
                $data['coordinates']['longitude'][$x] = $coords[$x]['longitude'];
                $data['coordinates']['latitude'][$x] = $coords[$x]['latitude'];
            }
        }*/
        
        $adv = $this->advisories_model->advisories();
        $adp = count($adv);
        for($x=0;$x<$adp;$x++)
        {
            $data[$x] = array
            (
                'adv_id' => $adv[$x]['adv_id'],
                'desc' => $adv[$x]['description'],
                'type' => $adv[$x]['type'],
                'timestamp' => $adv[$x]['timestamp'],
                'from' => $adv[$x]['from'],
                'to' => $adv[$x]['to']
            );
            
            $c = $this->advisories_model->coordinates($adv[$x]['adv_id']);
            $cc = count($c);
            for($y=0;$y<$cc;$y++)
            {
                $data[$x]['coordinates']['longitude'][$y] = $c[$y]['longitude'];
                $data[$x]['coordinates']['latitude'][$y] = $c[$y]['latitude'];
            }
        }
        
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        
    }
    
}
?>