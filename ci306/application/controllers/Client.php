<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ClientModel');
	}
	public function index()
	{	
      $this->vue('Client');		
    }
}