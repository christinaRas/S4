
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

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Code Non  Valider</h1>
      <!-- <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav> -->
    </div><!-- End Page Title -->
    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
                <div class="card-body">
                  <h5 class="card-title">Code a Valider </h5>
                  <table class="table table-borderless datatable">
                      <form action="<?php echo base_url('../BackOffice/validationCode'); ?>" method="post">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">User</th>
                        <th scope="col">Code</th>
                        <th scope="col">Valider le code</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php foreach( $result as $results ): ?>
                      <tr>
                        <th scope="row"><a href="#"><?php echo $results->ID_PAIEMENT;  ?></th>
                        <td><?php echo $results->ID_USER;  ?></td>
                        <td><?php echo $results->ID_ARGENT ; ?></td>
                        <td><button type="submit" class="btn btn-primary" name="btn" value="<?php echo $results->ID_PAIEMENT;  ?>" >Accepter</button></td>
                      </tr>
                      <?php  endforeach; ?>
                      </form>
                    </tbody>
                  </table>
                </div>
    </section>
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->

</body>

</html>