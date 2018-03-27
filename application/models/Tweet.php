<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tweet extends CI_model
{
    public function getTweet($row)
    {   
        // get 5 tweet
        $last_row = $row + 4 ;
        $sql= "SELECT * FROM `tweet` WHERE `num_row` BETWEEN ".$row." AND ".$last_row;
        $query = $this->db->query($sql);

        return $query->result(); 
    }

    public function getCount($id_user)
    {
        $sql = "SELECT COUNT(id_tweet) FROM `tweet` WHERE `id_user`=".$id_user;
        $query = $this->db->query($sql);

        return $query->result();
    }
}