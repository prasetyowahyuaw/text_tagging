<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role') == 1)
        {
            // redirect('home');
        }
        else if ($this->session->userdata('role') == 2)
        {
            // redirect('admin');
        }
        else
        {
            // redirect('welcome');
        }
        
        $this->load->library('slice');
        $this->load->model('Model');
    }

    public function index()
    {
        $this->slice->view('login');
    }
    
    public function submitlogin()
    {
        $username = $this->input->post('email');
        $password = md5($this->input->post('password'));
        
        $status = $this->Model->checkAccount($username,$password);

        if ($status != FALSE) {
            $session_data = array(
                'username' => $status[0]->username,
                'role' => $status[0]->role,
            );

            $this->session->set_userdata('logged_in', $session_data);
            redirect('newhome/tag/Adrian/0');

        } else {

            echo "<script>
            alert('User not found!');
            window.location.href='".base_url('login')."';
            </script>";

        }
    }
}