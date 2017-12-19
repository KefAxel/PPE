<html>
    <head> 
          <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctionsJS.js"></script>
    </head>
    <body>
<div id="Tableau" align="left">
        <table cellspacing="1px" cellpadding="1px" rules="all">
            <tr>
            <th>MED_PERTURBE </th>

            </tr>

  <?php

  foreach ($lesMedDecon as $decon)
      {
     echo "<tr>";
        echo "<td>".$decon->MED_PERTURBE."</td>";

        echo "</tr>";
      }

  echo "</table>";

  ?>
        </table>
</div>
    </body>
</html>