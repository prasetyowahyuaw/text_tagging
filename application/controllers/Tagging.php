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
        // var_dump($datatweet).die();
        $data['tweet'] = $datatweet;
        $this->slice->view('tagging',$data);
        
    }

    public function taggingUpdate()
    {
        // $email = $this->input->post('email'); # add this
        // $this->form_validation->set_rules('email','EMAIL','trim|required|valid_email|is_unique[utilisateurs.email]');

        // if($this->form_validation->run() == FALSE)
        // {
        //     echo validation_errors();
        // }
        // else
        // {               
        //     if(!$this->blog_m->registre($email))
        //     {
        //         echo "Something Went Wrong";
        //     }               
        //     else
        //     {
        //         echo "Inscription success";
        //     }

        // }
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