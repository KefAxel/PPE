<html>
    <head>
        <title>Fonctionaliter3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctions.js"></script>
          <script>
              
                  $
           (
               function()
                {
                    
                    $("#lstMedicament2").change(function(){
                    
                    
                  ( $('#lstMedicament2').val());
                    // Ce ne sont pas des input mais une liste
                    //$("input[name='formation']").click(function(){
                       AfficherPresentationMedicaments();
                    });
                    
                    
                }
                       
                        
             ); 
             
              
              
              
              
              
              
              
              
              
              
              
              
              </script>
    </head>
    <body>
       <h2>Liste Medicament</h2>
        <select id="lstMedicament">
            <?php
                foreach ($LesMedicaments2 as $medicament)
                    {
                        echo "<option id='opt1' value='".$medicament->MED_DEPOTLEGAL."'>".$medicament->MED_NOMCOMMERCIAL."</option>";
                        
                    }   
            ?> 
        
        </select><br>
        
         <br><br>
        <div id="divPresentation"></div>
        
        
        
    </body>
</html>