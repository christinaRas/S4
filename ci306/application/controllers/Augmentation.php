<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Augmentation extends MY_Controller 
{
    public function plat()
    {
        $this->load->model('Model_augmentation');
        $data = array();
        $data['plat'] = $this->Model_augmentation->getPlat();
        $data['sport'] = $this->Model_augmentation->getSport();
        $this->vue('vueAugmentation', $data);
    }

    // public function sport()
    // {
    //     $this->load->model('Model_augmentation');
    //     $data = array();
    //     $data['sport'] = $this->Model_augmentation->getSport();
    //     $this->vue('vueAugmentation', $data);
    // }
}
