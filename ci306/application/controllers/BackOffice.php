<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BackOffice extends MY_Controller {

    public function index()
	{
        $this->load->model('Model_BackOffice');
        $data['result'] = $this->Model_BackOffice->getNonValid();
		$this->vue('BackOffice',$data);
        // lien vers backOffice http://localhost/S4/ci306/BackOffice
	}
}   