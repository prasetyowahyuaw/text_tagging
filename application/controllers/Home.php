<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User','',TRUE);
        // system templating view lke blade laravel
        if ($this->session->has_userdata('username')){
            if($this->session->userdata('id_user')!=1){
                redirect('Tagging');
            }
        }
        else{
            redirect('Login');
        }
        
    }
    
    public function index()
    {
        // get data peformance
        $data['peformance'] = $this->User->getUserPeformance();
        // var_dump($data['peformance']);die();

        $this->slice->view('home',$data);
    }

}