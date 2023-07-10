<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RechercheProduit extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ClientModel');
	}
    public function index()
	{		
    $produit=$this->input->get('produit');
    $data['client']= $this->ClientModel->getFactureProduit($produit); 
        if ($data['client']==NULL) {
            $this->vue('vide');		
        }else{
            $this->vue('ClientR',$data);		
        }
    }
}