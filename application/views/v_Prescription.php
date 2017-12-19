<html>
    <head>
        <title>Medicament</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctionsJS.js"></script>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         <script type="text/javascript">
         
             $
           (
               function()
                {
                    
                    $('#lstMedicament').change(function(){
                      
                    $('#depotlegal').val($('#lstMedicament').val());


                    });
                }
                   
             );
     $
           (
          function()
                {
                    
                    $('#lstIndividu').change(function(){
                      
                    $('#code').val($('#lstIndividu').val());


                    });
                }
      );
      
      $
           (
          function()
                {
                    
                    $('#lstDosage').change(function(){
                      
                    $('#codedosage').val($('#lstDosage').val());


                    });
                }
      );
                    
         
        </script>
        
    </head>
    <body><div class="container-fluid">
         <h1 align="center">Prescription</h1>
        
  


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
    
    <form method="post">
<tr>
            
              <div class="form-group">
                    <label for="Code">Selectionner un Individu</label>
                    <br>
                    <select   id="code" class="input-small" name="code">
                          <?php 
                foreach ($lesindividus as $individus ){
                ?> 
                <option value="<?php echo $individus->TIN_CODE;?>"> <?php echo $individus->TIN_LIBELLE;?></option>
                <?php
                }
                ?>
                        </select>
                </div>

               <div class="form-group">
                    <label for="DepotLegal">Selectionner un Medicament</label>
                    <br>
                    <select   id="depotlegal" class="input-small" name="depotlegal">
                          <?php 
                foreach ($LesPrescription as $medi ){
                ?> 
                <option value="<?php echo $medi->MED_DEPOTLEGAL;?>"> <?php echo $medi->MED_NOMCOMMERCIAL;?></option>
                <?php
                }
                ?>
                        </select>
                </div>
             
<div class="form-group">
                    <label for="Codedosage">Selectionner un Dosage</label>
                    <br>
                    <select   id="codedosage" class="input-small" name="codedosage">
                          <?php 
                foreach ($lesdosages as $dos ){
                ?> 
                <option value="<?php echo $dos->DOS_CODE;?>"> <?php echo $dos->DOS_CODE;?></option>
                <?php
                }
                ?>
                        </select>
                </div>

                
    
<div class="form-group">
            <label>Prescription</label> 
            <br>
            <textarea id="nom" name="nom" rows=4 cols=40></TEXTAREA>

          
</div>
           
        </tr>
<br>
        <tr>    
            <td>
               <input type="submit" name="insert" value="Sauvegarder" class=" btn btn-primary" />
            </td>
        </tr>
        <?php

if($this->input->post('insert') != ''){
/*Perform insert operation here*/

   $code = $this->input->post('code');
    $depotlegal = $this->input->post('depotlegal');
    $codedosage = $this->input->post('codedosage');
    $nom = $this->input->post('nom');
    


    $data = array(
        'TIN_CODE' => $code,
        'MED_DEPOTLEGAL' => $depotlegal,
        'DOS_CODE' => $codedosage,
        'PRE_POSOLOGIE' => $nom,
    );


    $this->db->insert('prescrire',$data);
     header("refresh: 0;");
}
?>
        
</form>
        </div>
    </body>
    
</html>