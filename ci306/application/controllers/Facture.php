<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facture extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('FactureModel');
	}
	public function index()
	{	
		$data['facture'] = $this->FactureModel->getFacture();
		if (count($data['facture'])==0) {
			$this->vue('Vide');
		}else
		{
			$this->vue('Recherche',$data);
		}
	}				
}
