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
          <li><a class="nav-link scrollto" href="#menu">Regime</a></li>
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
  </div>
</section><!-- End Hero -->

  <main id="main">
  </main>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
</body>
</html>