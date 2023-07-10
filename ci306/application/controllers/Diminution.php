<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Diminution extends MY_Controller 
{
    public function plat()
    {
        $this->load->model('Model_diminution');
        $data = array();
        $data['plat'] = $this->Model_diminution->getPlat();
        $this->vue('vueDiminution', $data);
    }
}
