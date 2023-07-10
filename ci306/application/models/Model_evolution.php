<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_evolution extends CI_Model {

    public function getEvolution($id_user)
    {
        $sql="SELECT * from Evolution where id_user=".$id_user." ";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function saveEvolution($id_user,$newpoids,$date)
    {
        $sql="insert into Evolution values(null,".$id_user.",".$newpoids.",'".$date."')";
        $query=$this->db->query($sql);
    }
    public function returne($id_user)
    {
        $sql="select id_choix from description where id_user=".$id_user." ";
        $query=$this->db->query($sql);
        return $query->result();
    }
}