<!DOCTYPE html>
<html>
<head>
  <title>Formulaire de Paiement</title>
</head>
<body>
  <header>
    <h1>Passons au Paiement</h1>
    <nav>
      <!-- Vos liens de navigation ici -->
    </nav>
  </header>

  <main>
  <div class="containerPaiement">
  <form action="<?php echo base_url('../Paiement/processPayment'); ?>" method="post">
      <div class="form-group">
        <label for="code">Code de Paiement</label>
        <select id="code" name="code">
          <option value="1">Code 1</option>
          <option value="2">Code 2</option>
          <option value="3">Code 3</option>
        </select></br>
        <label for="montant">Montant actuel sur votre porte feuille</label>
        <button type="submit">Payer</button>
      </div>
     
    </form>
  </div>
  </main>

  <footer>
    <div class="footer">
    <p>&copy; 2023 Mon Site de Paiement. Tous droits réservés.</p>
    </div>
  </footer>
</body>
</html>
