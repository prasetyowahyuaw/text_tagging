<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model 
{

	// function getTweet()
	// {
	// 	$query = $this->db->get('tweet');
	// 	return $query->result();
	// }

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

	//////////

	public function getTweet($pic, $userx) {

		

        $sql   = "SELECT * FROM `tweet` where pic = '$pic' and ".$userx." = '0' order by id_tweet limit 10";
        $query = $this->db->query($sql);
        
        return $query->result();
	}

	public function getUser($username) {

		

        $sql   = "SELECT * FROM `users` where username = '$username'";
        $query = $this->db->query($sql);
        
        return $query->result();
	}

	public function checkAccount($email,$password) {
        
        $sql   = "SELECT * from users where email = '$email' and password = '$password' ";
        $query = $this->db->query($sql);
        
        
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function insertData($table, $data) {
        $this->db->insert($table, $data);
    }
    
    public function updateData($param, $value, $table, $data) {
        $this->db->where($param, $value);
        $this->db->update($table, $data);
    }
    
    public function deleteData($param, $value, $table) {
        $this->db->where($param, $value);
        $this->db->delete($table);
    }

}