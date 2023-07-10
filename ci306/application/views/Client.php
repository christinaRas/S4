<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facture Client</title>
</head>
<body>
     <style>

    .login-container {
      max-width: 400px;
      margin: 0 auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      margin-top: 30px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="login-container">
          <h2>Recherche Client</h2>
          <form action="RechercheClient" method="post">
            <div class="form-group">
              <label for="Nom">Nom du Client</label>
              <input type="text" class="form-control" name="nom"  id="username" placeholder="Nom " required>
            </div>
            <div class="form-group">
              <label for="Prenom">Prenom du Client</label>
              <input type="text" class="form-control" name="prenom"  id="password" placeholder="Prenom" required>
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>