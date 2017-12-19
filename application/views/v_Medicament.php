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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.0.6/sweetalert2.all.js"></script>

<!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
         <script type="text/javascript">
         
             $
           (
               function()
                {
                    
                    $('#lstMedicament').change(function(){
                      
                    $('#depotlegal').val($('#lstMedicament').val());
                    $('#nomcommercial').val($('#lstMedicament option:selected').attr('name'));
                     $('#code').val($('#lstMedicament option:selected').attr('name2'));
                     $('#composition').val($('#lstMedicament option:selected').attr('name3'));
                     $('#effets').val($('#lstMedicament option:selected').attr('name4'));
                     $('#contreindic').val($('#lstMedicament option:selected').attr('name5'));
                     $('#prixechantillon').val($('#lstMedicament option:selected').attr('name6'));


                    });
                }
             );
        
         
        </script>
        
    </head>
    <body>
        <h1 align="center">Gestion des medicaments </h1>
  


        <div class="container">
              
  <ul class="pagination" align="center">
    <li><a href="http://localhost/SIO2/Medecin/index.php/Ctrl_A">Accueil</a></li>
    <li><a href="http://localhost/SIO2/Medecin/index.php/Ctrl_A/afficherIndividus">Gestion des Individus</a></li>
    <li><a href="http://localhost/SIO2/Medecin/index.php/Ctrl_A/afficherLesMedicament">Gestion des Medicaments</a></li>
    <li><a href="http://localhost/SIO2/Medecin/index.php/Ctrl_A/afficherPrecription">Gestion des Prescription</a></li>
    <li><a href="http://localhost/SIO2/Medecin/index.php/Ctrl_A/afficherDeconseiller">Gestion des Medicaments non Conseillés</a></li>
    <li><a href="http://localhost/SIO2/Medecin/index.php/Ctrl_A/afficherStats">Statistique</a></li>
  </ul>
</div>
        
        <br>
        <br>
        <div class="col-sm-7">
        <table class="table table-striped" cellspacing="2px" cellpadding="2px" rules="all"  >
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
        </div>  
        <div class="col-sm-2">
            
            
        </div>
       <div class="col-sm-5">
        <h2>Inserer un nouveau medicament ou bien selectionner un medicament a modifier</h2>
        
       <label for="NomCommercial">Choix d'un Medicament a modifier</label>
       
        <select id="lstMedicament" >
                
                    <?php
                    foreach ($medicament as $medi)
                    {
                    ?>
                

     <option name="<?php echo $medi->MED_NOMCOMMERCIAL;?>" 
             value="<?php echo $medi->MED_DEPOTLEGAL; ?>"
             name2="<?php echo $medi->FAM_CODE; ?>"
             name3="<?php echo $medi->MED_COMPOSITION; ?>"
             name4="<?php echo $medi->MED_EFFETS; ?>"
             name5="<?php echo $medi->MED_CONTREINDIC; ?>"
             name6="<?php echo $medi->MED_PRIXECHANTILLON; ?>"

             >
                 <?php echo $medi->MED_NOMCOMMERCIAL; ?>
     </option>
                    <?php
                    }
                    ?>
            </select>
       </
       <br>
       <br>
       
       
        
        
       <h4>Inserer un nouveau medicament ou modifier un medicament</h4>
       <br>
    <form method="post">
    
<tr>
            <td>
                <div class="form-group">
                    <label for="DepotLegal">Depot legal	</label>
                    <br>
                    <input type="textbox" id="depotlegal" name="depotlegal">
                </div>
            </td>

            <td>
                <div class="form-group">
                    <label for="NomCommercial">Nom Commercial</label>
                    <br>
                    <input type="textbox" id="nomcommercial" name="nomcommercial">
                </div>
            </td>  
            <td>
                <div class="form-group">
                    <label for="Code">Code</label>
                    <br>
                    <select   id="code" class="input-small" name="code">
                          <?php 
                foreach ($famille as $fam ){
                ?> 
                <option value="<?php echo $fam->FAM_CODE;?>"> <?php echo $fam->FAM_LIBELLE;?></option>
                <?php
                }
                ?>
                        </select>
                </div>
            </td>
           
            <td>
                <div class="form-group">
                    <label for="Composition">Composition</label>
                    <br>
                    <input type="textbox" size="50" id="composition" name="composition">
                </div>
            </td>
             <td>
                <div class="form-group">
                    <label for="Effets">Effets</label>
                    <br>
                    <input type="textbox" id="effets" name="effets">
                </div>
            </td>
             <td>
                <div class="form-group">
                    <label for="Contreindic">Contreindic</label>
                    <br>
                    <input type="textbox" id="contreindic" name="contreindic">
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="PrixEchantillon">PrixEchantillon</label>
                    <br>
                    <input type="textbox" id="prixechantillon" name="prixechantillon">
                </div>
            </td>
        </tr>

        <tr>    
            <td>
               <input type="submit" name="insert" value="Ajouter" class="btn btn-success" />
            </td>
        </tr>
        <tr>    
            <td>
                <input type="submit" name="update" value="Modifier" class=" btn btn-primary"  />
               
            </td>
        </tr>
        <?php
if($this->input->post('update') != ''){

       $code = $this->input->post('code');
    $depotlegal = $this->input->post('depotlegal');
    $nomcommercial = $this->input->post('nomcommercial');
    $composition = $this->input->post('composition');
    $effets = $this->input->post('effets');
    $contreindic = $this->input->post('contreindic');
    $prixechantillon = $this->input->post('prixechantillon');
    

    $data = array(
        'FAM_CODE' => $code,
        'MED_DEPOTLEGAL' => $depotlegal,
        'MED_NOMCOMMERCIAL' => $nomcommercial,
        'MED_COMPOSITION' => $composition,
        'MED_EFFETS' => $effets,
        'MED_CONTREINDIC' => $contreindic,
        'MED_PRIXECHANTILLON' => $prixechantillon,
    );
    $this->db->set('MED_DEPOTLEGAL', $depotlegal);
$this->db->set('MED_NOMCOMMERCIAL', $nomcommercial);
$this->db->set('MED_COMPOSITION', $composition);
$this->db->set('MED_EFFETS', $effets);
$this->db->set('MED_CONTREINDIC', $contreindic);
$this->db->set('MED_PRIXECHANTILLON', $prixechantillon);
    $this->db->where('MED_DEPOTLEGAL', $depotlegal);
$this->db->update('medicament',$data);
           
     header("refresh: 0;");

}
if($this->input->post('insert') != ''){
/*Perform insert operation here*/

    $code = $this->input->post('code');
    $depotlegal = $this->input->post('depotlegal');
    $nomcommercial = $this->input->post('nomcommercial');
    $composition = $this->input->post('composition');
    $effets = $this->input->post('effets');
    $contreindic = $this->input->post('contreindic');
    $prixechantillon = $this->input->post('prixechantillon');
    


    $data = array(
        'FAM_CODE' => $code,
        'MED_DEPOTLEGAL' => $depotlegal,
        'MED_NOMCOMMERCIAL' => $nomcommercial,
        'MED_COMPOSITION' => $composition,
        'MED_EFFETS' => $effets,
        'MED_CONTREINDIC' => $contreindic,
        'MED_PRIXECHANTILLON' => $prixechantillon,
    );


    $this->db->insert('medicament',$data);
     header("refresh: 0;");
}

?>
        
</form>
       </div>
    --
    <div id="divIndividus"></div>
    </body>
    
</html>