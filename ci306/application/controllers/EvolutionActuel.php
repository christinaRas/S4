<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EvolutionActuel extends MY_Controller 
{
    public function stat()
{
    $this->load->library('session');

    $userId = $this->session->userdata('id_user');

    $data['Evolution'] = $this->getEvolution($userId);

    $this->vue('vueEvolutionActuel', $data);
}

public function getEvolution($userId)
{
    $sql = "select*from evolution where id_user =$userID";
    $query = $this->db->query($sql);
    return $query->result();

    // $this->db->select('date, poids');
    // $this->db->where('id_user', $userId);
    // $query = $this->db->get('Evolution');
    // return $query->result();
}

    
}