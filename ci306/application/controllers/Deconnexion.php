<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deconnexion extends MY_Controller {

    public function index()
    {
        $this->session->sess_destroy();
        $this->vue("Entre");
    }
}
?>

