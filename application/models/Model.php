<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model 
{

	function getTweet()
	{
		$query = $this->db->get('tweet');
		return $query->result();
	}

	function cekIsRegistered($datauser)
	{
		$query = $this->db->get_where('users', $datauser);
		return $query->row();
	}

	function addUser($datauser)
	{
		$query = $this->db->insert('users',$datauser);
	}

	function getDataLogin($datalogin)
	{
		$query = $this->db->get_where('users', $datalogin);
		return $query->row();
	}

	function registre($email)
	{
		$data = array('email'=>$this->input->post('email'));
		$this->db->insert('utilisateurs',$data);
	}

	function cekInsert()
	{
		$query = $this->db->get_where('users', $datauser);
		return $query->row();
	}

}