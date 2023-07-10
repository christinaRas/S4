<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Augmentation extends MY_Controller 
{
    public function plat()
    {
        $this->load->model('Model_augmentation');
        $data = array();
        $data['plat'] = $this->Model_augmentation->getPlat();
        $this->vue('vueAugmentation', $data);
    }
}
