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
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $datalogin = array(
			'email' => $email,
			'password' => md5($password)
        );

        $datauser = $this->Model->getDataLogin($datalogin);

        if($datauser == null)
        {
			echo "<script>
			alert('User not found!');
			window.location.href='".base_url()."';
			</script>";
        }
        else
        {
            $newdata = array(
                'id_user'  => $datauser->id,
                'email'  => $datauser->email,
                'role'  => $datauser->role
            );

            if ($datauser->role == 1)
            {
                $newdata['role_controller'] = 'user';
            }
            else if ($datauser->role == 2)
            {
                $newdata['role_controller'] = 'admin';
            }

            $this->session->set_userdata($newdata);
            redirect('home');
        }

    }

}