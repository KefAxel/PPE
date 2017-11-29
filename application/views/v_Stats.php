<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
          title: 'My Daily Activities',
          pieHole: 0.5,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
    
  </head>
  <body>
    <div id="donutchart" style="width: 100%px; height: 800px;"></div>
  </body>
</html>
