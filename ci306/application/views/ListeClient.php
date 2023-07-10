
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
    <a class="nav-link collapsed" href="<?php echo base_url('../BackOffice/dashBoard');  ?>">
      <i class="bi bi-card-list"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo base_url('../BackOffice/getNonValid');  ?>">
      <i class="bi bi-grid"></i>
      <span>Code Validation</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="<?php echo base_url('../BackOffice/listeClient');  ?>">
      <i class="bi bi-grid"></i>
      <span>Gerer les Cient</span>
    </a>
  </li>
</ul>
     </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Liste Client</h1>

      <br>
      <br>
    <section class="section dashboard">
    

    <div class="row">
        <!-- Left side columns -->
                <div class="card-body">
                  <table class="table table-borderless datatable">
                      <form action="#" method="post">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">User</th>
                        <th scope="col">E_mail</th>
                        <th scope="col">Mot de Passe</th>
                        <th scope="col">Action</th>

                      </tr>
                    </thead>
                    <tbody>
                       <?php foreach( $result as $results )  { ?>
                      <tr>
                        <th scope="row"><?php echo $results->id_user;  ?></th>
                        <td><?php echo $results->nom_user;  ?></td>
                        <td><?php echo $results->mail ; ?></td>
                        <td><?php echo $results->mdp ; ?></td>
                        <td><button type="submit" class="btn btn-danger" name="btn" value="<?php echo $results->id_user;  ?>" >Supprimer l'acces</button></td>
                      </tr>
                      <?php  }   ?>
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