<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurantly Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- css pour step progress -->
  <style>
      #progress {
        position: relative;
        margin-bottom: 30px;   
      }

      #progress-bar {
        position: absolute;
        background: lightseagreen;
        height: 5px;
        width: 0%;
        top: 50%;
        left: 0;
      }


      #progress-num {
        margin: 0;
        padding: 0;
        list-style: none;
        display: flex;
        justify-content: space-between;
      }

      #progress-num::before {
        content: "";
        background-color: lightgray;
        position: absolute;
        top: 50%;
        left: 0;
        height: 5px;
        width: 100%;
        z-index: -1;
      }

      #progress-num .step {
        border: 3px solid lightgray;
        border-radius: 100%;
        width: 25px;
        height: 25px;
        line-height: 25px;
        text-align: center;
        background-color: #fff;
        font-family: sans-serif;
        font-size: 14px;    
        position: relative;
        z-index: 1;
      }


      #progress-num .step.active {
        border-color: lightseagreen;
        background-color: lightseagreen;
        color: #fff;
      }
      #menu {
  padding: 50px 0;
}

#menu .container {
  max-width: 960px;
}

#menu form {
  margin-top: 30px;
}

#menu label {
  display: block;
  font-weight: bold;
  margin-bottom: 10px;
}

#menu input[type="number"] {
  width: 100%;
  padding: 10px;
  border-radius: 4px;
  border: 1px solid #ccc;
}

#menu button[type="submit"] {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff;
  border: none;
  border-radius: 4px;
  color: #fff;
  font-size: 16px;
  cursor: pointer;
}

#menu button[type="submit"]:hover {
  background-color: #0056b3;
}
</style>
  <!-- fin css pour step progress -->

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon.png'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style1.css'); ?>" rel="stylesheet">


</head>

<body>

  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>ETU2204-ETU2207-ETU2233</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span>48 HEURE DEV</span></i>
      </div>
    </div>
  </div>
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">DIET </a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">Objectif</a></li>
          <li><a class="nav-link scrollto" href="#menu">Calcul IMC</a></li>
          <li><a class="nav-link scrollto" href="#specials">Sport</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('../Evolutionuser/index'); ?>">Entrer mon evolution</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="<?php echo base_url('../Deconnexion') ?>" class="book-a-table-btn scrollto d-none d-lg-flex">se deconnecter</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <section id="hero" class="d-flex align-items-center bg-dark text-light">
  <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
    <div class="col-lg-8">
      <h1>Votre Solde est de</h1>
      <?php foreach ($result as $results) { ?>
        <h2><span><?php echo $results->total; ?> Ar</span></h2>
      <?php } ?>

      <div class="btns">
        <a href="<?php echo base_url('../Wallet/CodeValid'); ?>" class="btn-book animated fadeInUp scrollto">Entrer un Code de Crédits</a>
      </div>
    </div>
    <br>
    <br>
        
</section><!-- End Hero -->
<section id="about" class="d-flex align-items-center bg-dark text-light">
<div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
    <div class="col-lg-8">
        
      <h1>Votre IMC au debut:18</h1>
      <h1>Votre Objectif :12.1</h1>

      <div class="btns">
        <a href="<?php echo base_url('../Statistique/stat'); ?>" class="btn-book animated fadeInUp scrollto">Voir votre Evolution</a>
      </div>
    </div>
  </div>
</section>
<section id="menu" class="d-flex align-items-center bg-dark text-light">
<div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
    <div class="col-lg-8">
     <p>Entrer votre Taille : <input type="number" name="taille"></p>   
     <p>Enter votre poids : <input type="number" name="poids"></p>
     <button type="submit" onclick="calculerIMC()">Calculer</button>
    </div>
  </div>

</section>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
      <div class="footer" style ="margin-left: 0%; margin-top: 25%;">
    <footer style="background-color: black; color: white; padding: 20px; width: 100%; text-align: center; mar">
            <div class ="titre" style ="text-align: center;">
            <p >&copy; 2023  ETU : 2204-2207-2207.</p>
            </div>
    </footer>
    </div>
</body>
</html>
<script>
    function calculerIMC() {
  var taille = document.getElementById("taille").value;
  var poids = document.getElementById("poids").value;

  // Vérifier si les valeurs sont valides
  if (taille <= 0 || poids <= 0) {
    console.log("Veuillez entrer des valeurs valides pour la taille et le poids.");
    return;
  }

  // Calculer l'IMC
  var tailleEnMetres = taille / 100; // Convertir la taille en mètres
  var imc = poids / (tailleEnMetres * tailleEnMetres);

  alert("Votre IMC est : " + imc.toFixed(2));
}

</script>