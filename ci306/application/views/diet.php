<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire-Description</title>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
        <a href="#" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">BackOffice</span>
        </a>
        </nav><!-- End Icons Navigation -->

        </header><!-- End Header -->

        
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="index.html">
      <i class="bi bi-grid"></i>
      <span>Code Validation</span>
    </a>
  </li><!-- End Dashboard Nav -->


</ul>

</aside><!-- End Sidebar-->

    <style>
        .chart-container {
        width: 85%;
        height: 50%;
        margin: 20px;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top : 10%;
        }

        form input[type="number"],
        form select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
        }

        form select {
            height: 40px;
        }

        form input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="<?php echo base_url('../Landing/savediet'); ?>" method="post">
    <p class="titre" style ="text-align:center">Veuillez remplir ce Formulaire avant de continuer</p>
        <input type="number" name="poids" placeholder="poids actuel" id="" requierd>
        <input type="number" name="taille" placeholder="taille actuel" id="" requierd>
        <select name="genre" id="">
            <?php foreach ($genres as $genre): ?>
                <option value="<?php echo $genre->id_genre; ?>"><?php echo $genre->nom_genre; ?></option>
            <?php endforeach; ?>
        </select>
        <select name="choix" id="">
            <?php foreach ($choix as $c): ?>
                <option value="<?php echo $c->id_choix; ?>"><?php echo $c->nom_choix; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="submit" value="valider">
    </form>
</body>
</html>