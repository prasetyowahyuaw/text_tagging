<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // system templating view lke blade laravel
        $this->load->library('slice');
    }
    public function index()
    {
        $this->slice->view('home');
    }
}