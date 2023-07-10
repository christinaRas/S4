<!DOCTYPE html>
<html>
<head>
  <title>Graphique Statistique</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    .chart-container {
      width: 85%;
      height: 50%;
      margin: 20px;
    }
  </style>
</head>
<body>
  <div class="chart-container">
    <canvas id="myChart"></canvas>
  </div>

  <script>
    // Données du graphique
    var data = {
      labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin'],
      datasets: [{
        label: 'Ventes',
        data: [60, 70, 80, 90, 100, 130],
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
</body>
</html>
