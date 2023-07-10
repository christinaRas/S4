<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Landing extends MY_Controller 
{

    public function index()
    {
        $this->load->model('Model_diet');
        $data = array();
        $data['genres'] = $this->Model_diet->getGenre();
        $data['choix'] = $this->Model_diet->getChoixdiet();
        $this->load->view('diet', $data);
    }
}