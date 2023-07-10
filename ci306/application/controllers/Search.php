<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('RechercheModel');
	}
	public function index()
	{
		$numeroFacture = $this->input->get('search');
		$data['facture'] = $this->RechercheModel->getFacture($numeroFacture);
		if (count($data['facture'])==0) {
			$this->vue('Vide');
		}else
		{
			$this->vue('Recherche',$data);
		}
	}		
}
