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
      #progress-container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      margin: 20px 0;
      }

      #progress {
      height: 4px;
      width: 0;
      background-color: #333;
      }

      .circle {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background-color: #ccc;
      display: inline-block;
      }

      .active {
      background-color: #333;
      }
</style>
  <!-- fin css pour step progress -->

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/img/favicon.png'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style1.css'); ?>" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Restaurantly
  * Updated: Jun 15 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">

      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>ETU2204-ETU2207-ETU2233</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span>48 HEURE DEV</span></i>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Diet</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Sport</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url('../Evolutionuser/index'); ?>">Entrer mon evolution</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="<?php echo base_url('../Deconnexion') ?>" class="book-a-table-btn scrollto d-none d-lg-flex">se deconnecter</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-lg-8">
          <h1>Welcome to <span>Diet</span></h1>
          <h2>L'endroit faite pour un corps sain et parfait</h2>

          <div class="btns">
            <a href="<?php echo base_url('../Welcome/index'); ?>" class="btn-book animated fadeInUp scrollto">Wallet</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://www.youtube.com/watch?v=u6BOC7CDUTQ" class="glightbox play-btn"></a>
        </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          
          <div id="progress-container">
          <div id="progress"></div>
          <div class="circle" id="circle-1"></div>
          <div class="circle" id="circle-2"></div>
          
          </div>
          <button id="prev">Previous</button>
          <button id="next">Next</button>
        <!-- fin step progress -->

      </div>


      
    </section><!-- End About Section -->

    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
        <?php foreach ($plat as $p): ?>
          <div class="col-lg-6 menu-item filter-starters">
          <img src="<?php echo base_url($p->photoMampitomboplat); ?>" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#"><?php echo $p->nomMampitomboplat; ?></a><span>$5.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- ======= Book A Table Section ======= --





  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>