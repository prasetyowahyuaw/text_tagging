<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tag extends CI_model
{

    public function getCount($id_user)
    {
        $sql = "SELECT * FROM `tagging` WHERE `id_user`=".$id_user;
        $query = $this->db->query($sql);

        return $query->num_rows();
    }

    public function setTagging($data)
    {
        if (count($data) >= 5)
        {
            return $this->db->insert('tagging', $data);
        }
        else 
        {
            return FALSE;
        }
    }

    public function getTweetTagged()
    {
        $sql = "SELECT COUNT(DISTINCT(id_tweet)) FROM `tagging`";
        $query = $this->db->query($sql);

        return $query->num_rows();
    }
}