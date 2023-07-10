<!DOCTYPE html>
<html>
<head>
  <title>Formulaire de Paiement</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    select,
    input[type="text"] {
      width: 100%;
      padding: 10px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }

    button {
      padding: 10px 20px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
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
</body>
</html>
