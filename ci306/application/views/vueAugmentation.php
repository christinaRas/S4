<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/img/favicon.png'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/img/apple-touch-icon.png'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <title>Document</title>
</head>
<body>
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
            <img src="<?php echo $p->photoMampitomboplat; ?>" class="menu-img" alt="">
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
    </section><!-- End Menu Section -->
</body>
</html>
