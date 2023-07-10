<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Evolutionuser extends MY_Controller
{

    // public function index()
    // {
    //     $this->load->model('Model_diet');
    //     $data = array();
    //     $data['genres'] = $this->Model_diet->getGenre();
    //     $data['choix'] = $this->Model_diet->getChoixdiet();
    //     $this->vue('diet', $data);
    // }
    
    public function save()
    {
        $this->load->library('session');
        $id_user = $this->session->userdata('id_user');
        $newpoids = $this->input->post("newpoids");
        $date = $this->input->post("date");

        $this->load->model('Model_evolution');
        $this->Model_evolution->saveEvolution($id_user,$newpoids,$date);
        $this->vue('evolution');
    }    
}