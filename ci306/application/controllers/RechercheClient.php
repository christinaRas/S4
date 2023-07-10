<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RechercheClient extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ClientModel');
	}
    public function index()
	{		
    $nom=$this->input->post('nom');
    $prenom=$this->input->post('prenom');
    $data['client']= $this->ClientModel->getFacture($nom,$prenom); 
        if ($data['client']==NULL) {
            $this->vue('vide');		
        }else{
            $this->vue('ClientR',$data);		
        }
    }
}