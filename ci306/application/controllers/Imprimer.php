<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imprimer extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ProduitModel');
	}
	public function index()
	{
        $facture['id'] = $this->input->post('facture');
        $this->vue('pdf',$facture);
    }
}