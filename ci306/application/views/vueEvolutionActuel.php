<!DOCTYPE html>
<html>
<head>
  <title>Graphique Statistique</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
    <a href="javascript:history.back()" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">suivi & evolution-retour à l'acceuil</span>
    </a>
    </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

     <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link " href="index.html">
        <i class="bi bi-grid"></i>
        <span>Votre Evolution</span>
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
  </style>
</head>
<body>
  <main id="main" class="main">
    <div class="chart-container">
      <canvas id="myChart"></canvas>
    </div>

    <script>
      var chartData = <?php echo json_encode($Evolution); ?>;

      var labels = [];
      var poids = [];

      // Récupération des données pour le graphique
      chartData.forEach(function(item) {
        labels.push(item.date);
        poids.push(item.poids);
      });

      // Données du graphique
      var data = {
        labels: labels,
        datasets: [{
          label: 'Evolution',
          data: poids,
          backgroundColor: 'rgba(54, 162, 235, 0.5)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 1
        }]
      };

      // Configuration du graphique
      var options = {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      };

      // Création du graphique
      var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
      });
    </script>
  </main><!-- End #main -->
</body>
</html>

