<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BackOffice extends MY_Controller {

    public function index()
    {
        $this->vue("BackOfficeLogin");
    }
    public function BackLog()
    {
        $user = $this->input->post("user");
        $mdp = $this->input->post("mdp");
    
        if ($user == null) {
            $user = "men";
        }
        if ($mdp == null) {
            $mdp = "vide";
        }
    
        if ($user == "admin" && $mdp == "root") {
            $this->getNonValid();
        } else {
            $this->vue("BackOfficeLogin");
        }
    }
        public function getNonValid()
	{
        $this->load->model('Model_BackOffice');
        $data = array();
        $data['result'] = $this->Model_BackOffice->getNonValid();
		$this->vue('BackOffice',$data);
        // lien vers backOffice http://localhost/S4/ci306/BackOffice
	}
    public function validationCode($id_paiement)
    {
        $this->getNonValid();      
    }
}   