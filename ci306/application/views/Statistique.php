<!DOCTYPE html>
<html>
<head>
  <title>Graphique Statistique</title>
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
  </style>
</head>
<body>

    
  <main id="main" class="main">

  <div class="chart-container">
    <canvas id="myChart"></canvas>
  </div>

  <script>
    // Données du graphique
    var data = {
      labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin'],
      datasets: [{
        label: 'Evolution',
        data: [60, 70, 80, 82, 79, 75],
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









