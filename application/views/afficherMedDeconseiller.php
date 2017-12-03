<div id="Tableau" align="left">
        <table cellspacing="1px" cellpadding="1px" rules="all">
            <tr>
            <th>MED_PERTURBE </th>
            <th>MED_MED_PERTURBE</th>

            </tr>

  <?php

  foreach ($lesMedDecon as $constituer)
      {
     echo "<tr>";
        echo "<td>".$constituer->MED_MED_PERTURBE."</td>";
        echo "<td>".$constituer->MED_PERTURBE."</td>";

        echo "</tr>";
      }

  echo "</table>";

  ?>