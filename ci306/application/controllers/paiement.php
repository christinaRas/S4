<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paiement extends MY_Controller {

    public function processPayment() 
    {

      $code = $this->input->post('code');

      $this->load->model('Modelinsert_paiement');
      $this->Modelinsert_paiement->InsertPaiement($code);
      $this->vue('Statistique');
      
    //   $this->vue('code', $code);

  
      // Enregistrer les données dans la session (en utilisant la bibliothèque Session de CodeIgniter)
    //   $this->session->set_userdata('code', $code);
    //   $this->session->set_userdata('montant', $montant);
  
      // Rediriger vers une page de confirmation ou une autre action
      //redirect('paiement/confirmation');
    }
  }
  