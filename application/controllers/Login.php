<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->library('session');
        $this->load->library('slice');
        $this->load->model('User','',TRUE);
    }

    public function index()
    {
        $this->slice->view('login');
    }
    
    public function verifyLogin(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
   		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
   		if($this->form_validation->run() == FALSE)
   		{
     		//Field validation failed.  User redirected to login page
     		$this->slice->view('login');
   		}
   		else
   		{
            //Go to tagging page
			$this->session->set_flashdata('msg','Success Login');
     		redirect('tagging');
   		}
    }

    function check_database($password)
	{
	   	//Field validation succeeded.  Validate against database
	   	$username = $this->input->post('username');
	   	//query the database
		$result = $this->User->getUser($username, $password);
	 
	   	if($result)
	   	{
	     	$sess_array = array();
	     	foreach($result as $row)
	     	{
	       		$sess_array = array(
	         	'id_user' => $row->id_user,
				'username' => $row->username,
				'role' => $row->role
	       		);
	       		$this->session->set_userdata($sess_array);
	   		}
	     	return TRUE;
	   	}
	   	else
	   	{
	     	$this->form_validation->set_message('check_database', 'Invalid username or password');
	     	return false;
	   	}
    }
    
    public function Logout()
	{
	    $this->session->unset_userdata('username');
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('role');
	    session_destroy();
	    redirect('Login');
	}
}