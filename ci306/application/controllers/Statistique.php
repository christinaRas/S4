<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Statistique extends MY_Controller 
{
    public function stat()
{
    $this->load->library('session');

    $userId = $this->session->userdata('id_user');

    $data['Evolution'] = $this->getEvolution($userId);

    $this->vue('Statistique', $data);
}

public function getEvolution($userId)
{
    $this->db->select('date, poids');
    $this->db->where('id_user', $userId);
    $query = $this->db->get('Evolution');
    return $query->result();
}

    
}
