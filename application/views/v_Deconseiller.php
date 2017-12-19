<html>
    <head>
        <title>Medicament</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctionsJS.js"></script>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <script type="text/javascript">
         
             $
           (
               function()
                {
                    
                    $('#lstMedicament').change(function(){
                      
                    $('#code').val($('#lstMedicament').val());

                    });
                }
                   
             );
     $
           (
          function()
                {
                    
                    $('#lstMedicament2').change(function(){
                      
                    $('#coden').val($('#lstMedicament2').val());


                    });
                }
      );
      
           $
           (
               function()
                {

                    $("#lstMedicament").change(function(){


                    });


                }


             ); 

                    
         
        </script>
        
    </head>
    <body>
        <div class="container-fluid">
  


        <div class="container">
  <h1 align="center"> Medicament deconseillé</h1>                
  <ul class="pagination">
    <li><a href="http://localhost/SIO2/Medecin/index.php/Ctrl_A">Accueil</a></li>
    <li><a href="http://localhost/SIO2/Medecin/index.php/Ctrl_A/afficherIndividus">Gestion des Individus</a></li>
    <li><a href="http://localhost/SIO2/Medecin/index.php/Ctrl_A/afficherLesMedicament">Gestion des Medicaments</a></li>
    <li><a href="http://localhost/SIO2/Medecin/index.php/Ctrl_A/afficherPrecription">Gestion des Prescription</a></li>
    <li><a href="http://localhost/SIO2/Medecin/index.php/Ctrl_A/afficherDeconseiller">Gestion des Medicaments non Conseillés</a></li>
    <li><a href="http://localhost/SIO2/Medecin/index.php/Ctrl_A/afficherStats">Statistique</a></li>
  </ul>
</div>
        
        <div class="row">
               
            
        
        <br>
        <br>
             
             
    <div class="col-sm-6" >
        <h5>Selectionner le médicament pertubateur</h5>
         <select size="4" id="lstMedicament">
                
                    <?php
                    foreach ($medicament as $medi)
                    {
                    ?>
                

     <option name="<?php echo $medi->MED_NOMCOMMERCIAL;?>"
                value="<?php echo $medi->MED_DEPOTLEGAL; ?>"
                ><?php echo $medi->MED_NOMCOMMERCIAL;?></option>
                    <?php
                    }
                    ?>
            </select>
        <h5>Selectionner le médicament pertuber</h5>
        <select size="4"  id="lstMedicament2">
                
                    <?php
                    foreach ($medicament as $medi)
                    {
                    ?>
                

     <option name="<?php echo $medi->MED_NOMCOMMERCIAL;?>"
                value="<?php echo $medi->MED_DEPOTLEGAL; ?>"
                ><?php echo $medi->MED_NOMCOMMERCIAL;?></option>
                    <?php
                    }
                    ?>
            </select>
        
        
        
    --
   
    <form method="post">
<tr>
    
            <td>
                <div class="form-group">
                    <label for="Code">Code Medicament</label>
                    <br>
                    <input type="textbox" id="code" name="code" readonly="true">
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="CodeN">Code Medicament Deconseiller</label>
                    <br>
                    <input type="textbox" id="coden" name="coden" readonly="true" >
                </div>
            </td>
          

           
        </tr>

        <tr>    
            <td>
                <div class="container">        
       
           
            <div class="form-group row" id="ajouter"> 
                <div class="col-xs-2">
                <input type="submit" name="insert" value="Ajouter" class="btn btn-primary btn-block" />
                </div>
            </div>
                </div>
            </td>
        </tr>
   
        <?php

if($this->input->post('insert') != ''){
/*Perform insert operation here*/

   $code = $this->input->post('code');
    $coden = $this->input->post('coden');
    


    $data = array(
        'MED_PERTURBATEUR' => $code,
        'MED_MED_PERTURBE' => $coden,
    );


    $this->db->insert('interagir',$data);
     header("refresh: 0;");
}
?>
        
</form>
        </div>
     <div class="col-sm-6" >

    <table class="table table-striped"  rules="all">
            <tr>
            <th>Nom médicament pertubateur </th>
            <th>Nom médicament pertuber </th>
            </tr>  
            
<!--      
<select id="lstmedicament" size="20">-->
<?php 

//echo "input type='button' href='index.php/Ctrl_A/afficherIndividus'";
foreach ($medicamentn as $medin)
    {

echo "<tr>";
echo "<td>".$medin->MED_PERTURBATEUR."</td>";
echo "<td>".$medin->MED_MED_PERTURBE."</td>";
        echo "</tr>";
        
}

?>        
    
 </table> 
     </div>
    
     </div>
         </div>   
    --
     <div id="divDeconMed">
        
        
    </div>  
    </body>
   
</html>