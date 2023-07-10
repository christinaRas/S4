<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_augmentation extends CI_Model {

    public function getPlat()
    {
        $sql="SELECT * from regimeMampitomboplat";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function getSport()
    {
        $sql="SELECT * from regimeMampitombosport";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function save($id_user,$id_genre,$taille,$poids,$id_choix)
    {
        $sql="Insert into description values(null,".$id_user.",".$id_genre.",".$taille.",".$poids.",".$id_choix.")";
        $query=$this->db->query($sql);
    }
}