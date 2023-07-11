<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Statistique extends MY_Controller 
{
    public function stat()
    {
        // $this->load->vue('Statistique');
        // $data = array();
        // $data['plat'] = $this->Model_augmentation->getPlat();
        $this->vue('Statistique');
    }
}
