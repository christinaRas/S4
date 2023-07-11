

$data = array(
    'colonne1' => $valeur1,
    'colonne2' => $valeur2,
    // Ajoutez d'autres colonnes et valeurs selon vos besoins
);

$this->db->insert('nom_table', $data);
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_insertCode extends CI_Model {
 public function getCode()
 {
    $this->db->select();
    $this->db->from();
    $querry =  $this->db->get();
     $resutlt  = $this->query->result();  
    return $resutlt;
 }
}
?>