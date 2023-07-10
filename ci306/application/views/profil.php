<!DOCTYPE html>
<html>
<head>
  <title>Formulaire de Paiement</title>
  <link rel="stylesheet" href="public/css/paiement.css">
</head>
<body>
  <header>
    <h1>Mon Site de Paiement</h1>
    <nav>
      <!-- Vos liens de navigation ici -->
    </nav>
  </header>

  <main>
    <div class="container">
      <h2>Formulaire de Paiement</h2>
      <form>
        <div class="form-group">
          <label for="code">Code de Paiement</label>
          <select id="code" name="code">
            <option value="code1">Code 1</option>
            <option value="code2">Code 2</option>
            <option value="code3">Code 3</option>
          </select>
        </div>
        <div class="form-group">
          <label for="montant">Montant</label>
          <input type="text" id="montant" name="montant" placeholder="Entrez le montant">
        </div>
        <button type="submit">Payer</button>
      </form>
    </div>
  </main>

  <footer>
    <p>&copy; 2023 Mon Site de Paiement. Tous droits réservés.</p>
  </footer>
</body>
</html>
