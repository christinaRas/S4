<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_statistique extends CI_Model {

    $id_user = $this->session->userdata('id_user');


    public function getStat($id_user)
    {
        $sql="SELECT * from Evolution where id_user=".$id_user." ";
        $query=$this->db->query($sql);
        return $query->result();
    }

    

    public function Verification($id_user)
    {
        if()
    }

}