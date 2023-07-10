<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_diet extends CI_Model {

    public function getGenre()
    {
        $sql="Select * from genre";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function getChoixdiet()
    {
        $sql="Select * from choixRegime";
        $query=$this->db->query($sql);
        return $query->result();
    }
}