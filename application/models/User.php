<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User Extends CI_model
{
    public function getUser($username,$password){
        $this->db->select('*');
    	$this->db->from('user');
    	$this->db->where('username', $username);
    	$this->db->where('password', MD5($password));
    	$this->db->limit(1);

    	$query = $this->db->get();
 
		if($query->num_rows() == 1)
		{
		    return $query->result();
		}
		else
		{
		    return false;
		}
    }

    public function getRowEnd($id_user){
        $sql = 'SELECT `row_end` FROM `user` WHERE `id_user`='.$id_user;
        $query = $this->db->query($sql);

        return $query->result();
	}
	
	public function updateRowEnd($id_user)
	{
		$sql = 'UPDATE `user` SET `row_end`= `row_end`+5 WHERE `id_user`='.$id_user;
		$query = $this->db->query($sql);
	}

	public function getUserPeformance(){
		$sql = 'SELECT `name`,`row_end` FROM `user`';
		$query = $this->db->query($sql);

		return $query->result();
	}
}