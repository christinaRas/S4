<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_diminution extends CI_Model {

    public function getPlat()
    {
        $sql="SELECT * from regimeMampihenaplat";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function getSport()
    {
        $sql="SELECT * from regimeMampihenasport";
        $query=$this->db->query($sql);
        return $query->result();
    }
}