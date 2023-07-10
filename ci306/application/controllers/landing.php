<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class landing extends MY_Controller {

    public function index()
	{
		$this->vue('diet');
	}

	public function genre()
	{
        $this->load->model('Model_diet');
        $data['genres'] = $this->Model_diet->getGenre();
        $this->vue('diet', $data);
	}
	
    
	public function choix()
	{
        $this->load->model('Model_diet');
        $data['choix'] = $this->Model_diet->getChoixdiet();
        $this->vue('diet', $data);
	}
   
}