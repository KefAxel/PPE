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
        <button><a href="afficherIndividus">Liste Individus </a></button>
        <br>
        <br>
        <div id="Tableau" align="left">
        <table cellspacing="1px" cellpadding="1px" rules="all">
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
        
         <select id="lstMedicament">
                
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

             ><?php echo $medi->MED_NOMCOMMERCIAL; ?></option>
                    <?php
                    }
                    ?>
            </select>
        
        
    --
    <form method="post">
    
<tr>
            <td>
                <div class="form-group">
                    <label for="DepotLegal">Depot legal	</label>
                    <input type="textbox" id="depotlegal" name="depotlegal">
                </div>
            </td>

            <td>
                <div class="form-group">
                    <label for="NomCommercial">Nom Commercial</label>
                    <input type="textbox" id="nomcommercial" name="nomcommercial">
                </div>
            </td>  
            <td>
                <div class="form-group">
                    <label for="Code">Code</label>
                    <input type="textbox" id="code" name="code">
                </div>
            </td>
           
            <td>
                <div class="form-group">
                    <label for="Composition">Composition</label>
                    <input type="textbox" size="50" id="composition" name="composition">
                </div>
            </td>
             <td>
                <div class="form-group">
                    <label for="Effets">Effets</label>
                    <input type="textbox" id="effets" name="effets">
                </div>
            </td>
             <td>
                <div class="form-group">
                    <label for="Contreindic">Contreindic</label>
                    <input type="textbox" id="contreindic" name="contreindic">
                </div>
            </td>
            <td>
                <div class="form-group">
                    <label for="PrixEchantillon">PrixEchantillon</label>
                    <input type="textbox" id="prixechantillon" name="prixechantillon">
                </div>
            </td>
        </tr>

        <tr>    
            <td>
               <input type="submit" name="insert" value="Insert" />
            </td>
        </tr>
        <tr>    
            <td>
               <input type="submit" name="update" value="Update" />
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
    
    --
    <div id="divIndividus"></div>
    </body>
    
</html>