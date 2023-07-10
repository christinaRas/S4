<?php
class FacturePdfModel extends CI_Model {
    public function generatePdf($invoiceData,$client) {
        $client = "Mendrika";
        // Charger la bibliothèque TCPDF
        $this->load->library('tcpdf');
        
        // Créer un nouvel objet PDF
        $pdf = new TCPDF();

        // Paramètres du document PDF
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Mendrika');
        $pdf->SetTitle('Facture de '.$client);
        $pdf->SetSubject('Facture PDF');
        $pdf->SetKeywords('facture, pdf, exemple');

        // Ajouter une nouvelle page
        $pdf->AddPage();

        // Définir la couleur du texte
        $pdf->SetTextColor(0, 0, 0); // Noir

        // Ajouter du contenu à la facture
        $pdf->SetFont('', 'B', 12);
        $pdf->Write(0,"FACTURE",'','L',true,0,false,false,0);
        $pdf->Ln(10);

        // Afficher les données de la facture
        foreach ($invoiceData as $item) {
            $pdf->SetFont('times', '', 10);
            $pdf->Cell(50, 6, $item['description'], 1, 0, 'C');
            $pdf->Cell(30, 6, $item['quantity'], 1, 0, 'R');
            $pdf->Cell(40, 6, $item['price'], 1, 0, 'R');
            $pdf->Ln();
        }

        // Générer le fichier PDF
        $pdf->Output('facture.pdf', 'I');
    }
}
