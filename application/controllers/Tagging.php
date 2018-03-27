<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tagging extends Ci_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tweet');
        $this->load->model('User');
        $this->load->model('Tag');

        if ($this->session->has_userdata('username')){

        }
        else{
            redirect('Login');
        }
    }

    public function index()
    {
        // get user information
        $data['user'] = $this->session->userdata('username');
        $id_user = $this->session->userdata('id_user'); 
        $row_end = $this->User->getRowEnd($id_user)[0]->row_end;

        // get Tweet from row = row_end
        $data['tweet'] = $this->Tweet->getTweet($row_end);

        // get sum of tweet is tagged
        $data['counter'] = $this->Tag->getCount($id_user);
        
        // load view
        $this->slice->view('tagging',$data);
    }

    public function Submit()
    {
        // declare tweet and user
        $id_user = $this->session->userdata('id_user'); 
        $row_end = $this->User->getRowEnd($id_user)[0]->row_end;
        $data_tweet = $this->Tweet->getTweet($row_end);

        // declare value form input
        for ($i=0;$i<5;$i++)
        {   
            // declare checkbox sarkastik        
            $checkbox_sarkastik = $this->input->post('sarkastik_'.$data_tweet[$i]->id_tweet);
            if($checkbox_sarkastik == '1'){
                $sarkastik = 1;
            }
            else{
                $sarkastik = 0;        
            }

            // declare array
            $data_input = array(
                'id_user' => $this->session->userdata('id_user'),
                'id_tweet' => $data_tweet[$i]->id_tweet,
                'label_tweet' => $this->input->post('sentimen_tweet_'.$data_tweet[$i]->id_tweet),
                'label_topic' => $this->input->post('sentimen_topic_'.$data_tweet[$i]->id_tweet),
                'sarkastik' => $sarkastik
            );

            // insert to database
            $this->Tag->setTagging($data_input);
            
        }
        
        // update row end
        $this->User->updateRowEnd($id_user);

        redirect('tagging');

    }
    
}