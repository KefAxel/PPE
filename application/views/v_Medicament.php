<html>
    <head>
        <title>Medicament</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script type="text/javascript" src="JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="JS/lesFonctions.js"></script>
         <script type="text/javascript">
         
             $
           (
               function()
                {
                    
                    $("#lstmedicament").change(function(){ 
                        
                       afficherLesMedicaments($(this).val());
                    });
                    
                    $("#divIndividus").change(function(){ 
                        
                       afficherLesIndividus();
                    });
                }
             );
      
                    
         
        </script>
        
    </head>
    <body>
        <button><a href="index.php/Ctrl_A/afficherIndividus">bouton</a></button>
        <br>
        <br>
    </select>
        
        
        <table cellspacing="2px" cellpadding="2px" rules="all">
            <tr>
            <th>Depot legal </th>
            <th>Nom Commercial</th>
            <th>Libelle Famille</th>
            <th>Composition</th>
            <th>Effets</th>
            <th>contreindic</th>
            <th>prix</th>
            </tr>  
            
<!--      
<select id="lstmedicament" size="20">-->
<?php 
//echo "input type='button' href='index.php/Ctrl_A/afficherIndividus'";
foreach ($medicament as $med)
    {

echo "<tr>";
echo "<td>".$med->MED_DEPOTLEGAL."</td>";
echo "<td>".$med->MED_NOMCOMMERCIAL."</td>";
echo "<td>".$med->FAM_CODE."</td>";
echo "<td>".$med->MED_COMPOSITION."</td>";
echo "<td>".$med->MED_EFFETS."</td>";
echo "<td>".$med->MED_CONTREINDIC."</td>";
echo "<td>".$med->MED_PRIXECHANTILLON."</td>";
        echo "</tr>";
        
}
?>        
 </table> 
    <div id="divIndividus"></div>
    </body>
</html>