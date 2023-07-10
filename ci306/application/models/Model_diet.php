<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_diet extends CI_Model {

    public function getGenre()
    {
        $sql="SELECT * from genre";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function getChoixdiet()
    {
        $sql="SELECT * from choixRegime";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function save()
    {
        $sql="INSERT INTO "
    }
}