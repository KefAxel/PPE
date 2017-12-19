<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['MED_DEPOTLEGAL', 'FAM_CODE'],
          <?php
          foreach ($stats as $row)
          {
              echo"['".$row->FAM_LIBELLE."',".$row->nbmed ,"],";
          }
          ?>
        ]);

        var options = {
          title: 'Nombre de Medicament par famille',
          pieHole: 0.5,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
    <h1 align="center">Statistique</h1>
  


        <div class="container">            
  <ul class="pagination">
    <li><a href="http://localhost/SIO2/Medecin/index.php/Ctrl_A">Accueil</a></li>
    <li><a href="http://localhost/SIO2/Medecin/index.php/Ctrl_A/afficherIndividus">Gestion des Individus</a></li>
    <li><a href="http://localhost/SIO2/Medecin/index.php/Ctrl_A/afficherLesMedicament">Gestion des Medicaments</a></li>
    <li><a href="http://localhost/SIO2/Medecin/index.php/Ctrl_A/afficherPrecription">Gestion des Prescription</a></li>
    <li><a href="http://localhost/SIO2/Medecin/index.php/Ctrl_A/afficherDeconseiller">Gestion des Medicaments non Conseillés</a></li>
    <li><a href="http://localhost/SIO2/Medecin/index.php/Ctrl_A/afficherStats">Statistique</a></li>
  </ul>
</div>
  </head>
  <body>
    <div id="donutchart" style="width: 100%px; height: 800px;"></div>
  </body>
</html>
