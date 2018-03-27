<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
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
        $this->slice->view('home');
    }

    public function logout() {
        
        $sess_array = array(
            'email' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        redirect('login');
    }


}