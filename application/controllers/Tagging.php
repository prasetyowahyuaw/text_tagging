<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tagging extends Ci_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('slice');
        $this->load->model('Model');
    }

    public function index()
    {
        $datatweet = $this->Model->getTweet();
        $data['tweet'] = $datatweet;
        $this->slice->view('tagging',$data);
        
    }

    public function taggingUpdate()
    {
        
        $tagging = $this->input->post('inlineRadioOptions');

        if (isset($tagging)) 
        {
            array(
                'label_tweet' => $tagging
            );

            $isRegistered = $this->Model->cekIsRegistered(array('email' => $email));

            $datauser = $this->Model->getDataLogin($datalogin);

        }

    }
    
}