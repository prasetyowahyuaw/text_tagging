<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newhome extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        
        $this->load->helper('text');
        $this->load->helper('form');
        $this->load->library('image_lib');
        $this->load->library('form_validation');
        $this->load->model('Model');
        
        date_default_timezone_set("Asia/Jakarta");
    }

    public function index() {

    }

    public function tag($pic) {

        if (isset($this->session->userdata['logged_in'])) {

            $data['pic'] = $pic;
            
            $userx = $this->session->userdata['logged_in']['username'];
            $data['tw'] = $this->Model->getTweet($pic,$userx);
            $data['userx'] =  $userx;


            $this->load->view('newview/tagging_view',$data);

        } else {
            
            redirect('Login');

        }

    }

    public function submit_tag2() {

        $size = (int)$this->input->post('size');
        $pic = $this->input->post('pic');
        $user = $this->input->post('user');
        $us = $this->Model->getUser($user);
        $id_user = $us[0]->id_user;

        $sentimen1_0 = $this->input->post('sentimen1-0');
        $sentimen2_0 = $this->input->post('sentimen2-0');
        $sarkastik_0 = $this->input->post('sarkastik-0');
        $idtweet_0 = $this->input->post('id_tweet-0');

        for ($i=0; $i < $size ; $i++) { 

            $cek = $this->input->post('sarkastik-'.$i);
            $id_tweet = $this->input->post('id_tweet-'.$i);

            if(!($cek)) {

                $sars = 0;

            } else {

                $sars = 1;
            }

            $data = array(
                'id_user' => $id_user,
                'id_tweet' => $id_tweet,
                'label_tweet' => $this->input->post('sentimen1-'.$i),
                'label_topic' => $this->input->post('sentimen2-'.$i),
                'sarkastik' => $sars,
            );

            $this->Model->insertData('tagging',$data);

            $data = array(
                $user => '1'
            );

            $this->Model->updateData('id_tweet', $id_tweet, 'tweet', $data);
            
        }

        // $arr = get_defined_vars();
        // print_r($arr);

        redirect('newhome/tag/'.$pic);

    }

}