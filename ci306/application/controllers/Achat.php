<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Achat extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ProduitModel');
	}
	public function index()
	{
        $data['prod']= $this->ProduitModel->getProduit();
        $this->vue('Achat',$data);
    }
}