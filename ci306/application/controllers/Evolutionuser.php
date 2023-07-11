<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Evolutionuser extends MY_Controller
{

    public function index()
    {
        $this->vue('evolution');
    }
    
    public function save()
    {
        $this->load->library('session');
        $id_user = $this->session->userdata('id_user');
        $newpoids = $this->input->post("newpoids");
        $date = $this->input->post("date");

        $this->load->model('Model_evolution');
        if($this->Model_evolution->saveEvolution($id_user, $newpoids, $date))
        {
            $choix = $this->Model_evolution->returne($id_user);
            if ($choix == 1) {
                redirect('../Statistique/stat'); // Redirection vers le contrôleur "Augmentation" et la méthode "plat"
            } elseif ($choix == 2) {
                redirect('../Diminution/plat'); // Redirection vers le contrôleur "Diminution" et la méthode "plat"
            }
        }
    }
}
