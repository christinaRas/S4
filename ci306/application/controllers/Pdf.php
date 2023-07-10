<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set('Europe/Paris');
error_reporting(error_reporting() & ~E_WARNING);
class Pdf extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('FacturePdfModel');
	}
	public function index()
	{
        $invoiceData = array(
            array('description' => 'Produit 1', 'quantity' => 2, 'price' => 10),
            array('description' => 'Produit 2', 'quantity' => 1, 'price' => 15),
            array('description' => 'Produit 3', 'quantity' => 3, 'price' => 8),
            array('description' => 'Produit 3', 'quantity' => 3, 'price' => 8)

        );

        // Appeler la fonction generateInvoice du modèle (model) Invoice_model
        $this->FacturePdfModel->generatePdf($invoiceData);
    }
}