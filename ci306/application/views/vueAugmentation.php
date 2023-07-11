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

        <!-- debut step progress -->

  <h3>Voici les suivis des Jours de votre progression</h3>
            <div id="progress">
                <div id="progress-bar"></div>
                <ul id="progress-num">
                    <li class="step active">1</li>
                    <li class="step">2</li>
                    <li class="step">3</li>
                    <li class="step">4</li>
                </ul>
            </div>

            <button id="progress-prev" class="btn" disabled>Prev</button>
            <button id="progress-next" class="btn">Next</button>

            <script>
                const progressNext = document.getElementById("progress-next");
                const progressPrev = document.getElementById("progress-prev");
                const steps = document.querySelectorAll(".step");
                const progressBar = document.getElementById("progress-bar");

                let active = 1;

                progressNext.addEventListener("click", () => {
                    active++;
                    if (active > steps.length) {
                        active = steps.length;
                    }
                    updateProgress();
                });

                progressPrev.addEventListener("click", () => {
                    active--;
                    if (active < 1) {
                        active = 1;
                    }
                    updateProgress();
                });

                const updateProgress = () => {
                    steps.forEach((step, i) => {
                        if (i < active) {
                            step.classList.add("active");
                        } else {
                            step.classList.remove("active");
                        }
                    });
                    progressBar.style.width = ((active - 1) / (steps.length - 1)) * 100 + "%";

                    if (active === 1) {
                        progressPrev.disabled = true;
                    } else if (active === steps.length) {
                        progressNext.disabled = true;
                    } else {
                        progressPrev.disabled = false;
                        progressNext.disabled = false;
                    }
                };

                updateProgress();
            </script>

            <!-- // step progress -->

        <!-- fin step progress -->
  
<!-- End About Section -->

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
              <a href="#"><?php echo $p->nomMampitomboplat; ?></a><span>5000 AR</span>
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