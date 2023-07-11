<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Statistique extends MY_Controller 
{
    public function stat()
    {

        $data['Evolution'] = $this->getEvolution();

        // $this->load->vue('Statistique');
        // $data = array();
        // $data['plat'] = $this->Model_augmentation->getPlat();
        $this->vue('Statistique',$data);

    }
        
        public function getEvolution()
    {   
        // $sql = "select date,poids from Evolution "
        // $query = $this->db->query($sql);
        $this->db->select('date, poids');
        $query = $this->db->get('Evolution');
        return $query->result();
    }
    
}
