<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('slice');
        $this->load->model('Model');
    }

    public function index()
    {
        $this->slice->view('signup');
    }

    public function submitregister()
    {
        $username = $this->input->post('username');
		$email = $this->input->post('email');
        $password = $this->input->post('password');
        $confirmpassword = $this->input->post('confirmpassword');
        
            $isRegistered = $this->Model->cekIsRegistered(array('email' => $email));
        
            if ($isRegistered == null)
            {
                if ($password != $confirmpassword) 
                {
                    // Alert password dan password (confirm) tidak sama
                    echo "<script>
                    alert('Password and Password (confirm) not same');
                    window.location.href='".base_url()."signup';
                    </script>";
                }
                else 
                {
                    $this->Model->addUser(array(
                        'username' => $username,
                        'email' => $email,
                        'password' => md5($password),
                        
                    ));
                    
                    // Alert email berhasil registrasi
                    echo "<script>
                    alert('Register is Success!');
                    window.location.href='".base_url()."';
                    </script>";

                }
            } 
            else 
            {
                // Alert email sudah ada (mungkin bisa diganti dengan yang lebih bagus)
                echo "<script>
                alert('This email has registered!');
                window.location.href='".base_url()."signup';
                </script>";
            }        

    }
}