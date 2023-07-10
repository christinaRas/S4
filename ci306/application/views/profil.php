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
  <form action="<?php echo base_url('../paiement/processPayment'); ?>" method="post">
      <div class="form-group">
        <label for="code">Code de Paiement</label>
        <select id="code" name="code">
          <option value="code1">Code 1</option>
          <option value="code2">Code 2</option>
          <option value="code3">Code 3</option>
        </select></br>
        <label for="montant">Montant actuel sur votre porte feuille</label>
        <button type="submit">Payer</button>
      </div>
      <!-- <div class="form-group">
        <label for="montant">Montant actuel sur votre porte feuille</label>
        <input type="text" id="montant" name="montant" placeholder="Entrez le montant">
      </div> -->
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
