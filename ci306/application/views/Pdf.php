<!-- <?php 
echo $id;
?> -->
<style>
    @media print {
      body {
        width: 21cm;
        height: 29.7cm;
        margin: 0;
        padding: 0;
      }

      .container {
        max-width: 100%;
        padding: 2cm;
        margin: 0 auto;
      }

      table {
        font-size: 12px;
      }

      h1 {
        font-size: 24px;
      }

      h5 {
        font-size: 18px;
      }
    }
  </style>
  <title>Modèle de facture</title>
</head>

<body>
  <div class="container mt-5" id="all">
    <div class="row">
      <div class="col">
        <h1>Facture</h1>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h5>Informations du client :</h5>
        <p>Nom du client : John Doe</p>
        <p>Adresse : 123 rue des exemples</p>
        <p>Ville : Anytown</p>
      </div>
      <div class="col">
        <h5>Informations de facture :</h5>
        <p>Date : 10 juin 2023</p>
        <p>Numéro de facture : 12345</p>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Produit</th>
              <th scope="col">Quantité</th>
              <th scope="col">Prix unitaire</th>
              <th scope="col">TVA</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Produit 1</td>
              <td>2</td>
              <td>$10</td>
              <td>$2</td>
              <td>$20</td>
            </tr>
            <tr>
              <td>Produit 2</td>
              <td>1</td>
              <td>$15</td>
              <td>$3</td>
              <td>$15</td>
            </tr>
            <tr>
              <td>Produit 3</td>
              <td>3</td>
              <td>$5</td>
              <td>$0.75</td>
              <td>$15</td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th colspan="4">Total HT</th>
              <th>$50</th>
            </tr>
            <tr>
              <th colspan="4">TVA (20%)</th>
              <th>$5.75</th>
            </tr>
            <tr>
              <th colspan="4">Total TTC</th>
              <th>$55.75</th>
            </tr>
            
          </tfoot>
        </table>
      </div>
    </div>
  </div>
  <button class="btn btn-primary" id="pdf">Telecharger</button>
