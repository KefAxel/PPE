<html>
    <head>
        <title>Medicament</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctions.js"></script>
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
    <body>
         <h1 align="center">Prescription</h1>
        
        <a href=http://localhost/SIO2/Medecin/index.php/Ctrl_A//>Retour au menu</a>
        <br>
        <br>
        
          <div class="col-sm-4">
        <select size="4" id="lstIndividu">
                
                    <?php
                    foreach ($lesindividus as $individus)
                    {
                    ?>
                

     <option 
             value="<?php echo $individus->TIN_CODE; ?>"

             ><?php echo $individus->TIN_LIBELLE; ?></option>
                    <?php
                    }
                    ?>
            </select>
             
             <select size="4" id="lstMedicament">
                
                    <?php
                    foreach ($LesPrescription as $medi)
                    {
                    ?>
                

     <option name="<?php echo $medi->MED_NOMCOMMERCIAL;?>"
                value="<?php echo $medi->MED_DEPOTLEGAL; ?>"
                ><?php echo $medi->MED_NOMCOMMERCIAL;?></option>
                    <?php
                    }
                    ?>
            </select>
             
         
        <select size="4" id="lstDosage">
                
                    <?php
                    foreach ($lesdosages as $dos)
                    {
                    ?>
                

     <option 
             value="<?php echo $dos->DOS_CODE; ?>"

             ><?php echo $dos->DOS_CODE; ?></option>
                    <?php
                    }
                    ?>
            </select>
       
        
</div>
    <form method="post">
<tr>
            <td>
                <div class="form-group">
                    <label for="Code">Code Individu</label>
                    <br>
                    <input type="textbox" id="code" name="code" readonly="true">
                </div>
            </td>
    </div>
            <td>
                <div class="form-group">
                    <label for="DepotLegal">Depot legal medicament</label>
                    <br>
                    <input type="textbox" id="depotlegal" name="depotlegal"readonly="true">
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="Codedosage">Code dosage</label>
                    <br>
                    <input type="textbox" id="codedosage" name="codedosage"readonly="true">
                </div>
            </td>
    
<div class="form-group">
            <label>Prescription</label> 
            <br>
            <textarea id="nom" name="nom" rows=4 cols=40></TEXTAREA>

          
</div>
           
        </tr>
<br>
        <tr>    
            <td>
               <input type="submit" name="insert" value="Sauvegarder" />
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

    </body>
    
</html>