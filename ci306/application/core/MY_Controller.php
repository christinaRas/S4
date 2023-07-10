<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public function __construct()
    {
       parent ::__construct(); 
    }
	public function vue($view,$data=array())
    {
        $this->load->helper('url');
        $this->load->view('layout/header');
        $this->load->view($view,$data);
        $this->load->view('layout/footer');     
    }

}
