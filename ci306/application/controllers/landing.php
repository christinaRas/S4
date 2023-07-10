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
        $this->vue('diet', $data);
    }
    
    public function savediet()
    {
        $this->load->library('session');
        $id_user = $this->session->userdata('id_user');
        $genre = $this->input->post("genre");
        $taille = $this->input->post("taille");
        $poids = $this->input->post("poids");
        $choix = $this->input->post("choix");
    
        $this->load->model('Model_diet');
        $this->Model_diet->save($id_user, $genre, $taille, $poids, $choix);
    
        if ($choix == 1) {
            redirect('Augmentation');
        } elseif ($choix == 2) {
            redirect('Diminution');
        }
    }    
}