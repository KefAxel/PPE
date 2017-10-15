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
                    });
                    
                    $('#lstMedicament').change(function(){
                      
                    $('#code').val(opt1);
                    });
                }
             );
      
                    
         
        </script>
        
    </head>
    <body>
        <button><a href="index.php/Ctrl_A/afficherIndividus">bouton</a></button>
        <br>
        <br>
        
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
        <?php

        echo "<select id='lstMedicament'>";


                    foreach ($medicament as $medi)
                    {


                        echo "<option id='opt1' value='".$medi->MED_DEPOTLEGAL."'>".$medi->MED_NOMCOMMERCIAL."</option>";
           
                        echo "<option id='opt2' value='".$medi->MED_NOMCOMMERCIAL."'>".$medi->MED_NOMCOMMERCIAL."</option>";

 

                    }


       echo "</select>";
   ?>
        
    --
    <form method="post">
    
<!--    $data = array(
        'title' => 'My title',
        'name' => 'My Name',
        'date' => 'My date'
);

$this->db->insert('mytable', $data);
// Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')-->

    
<tr>
            <td>
                <div class="form-group">
                    <label for="DepotLegal">Libellé</label>
                    <input type="textbox" id="depotlegal" name="depotlegal">
                </div>
            </td>

            <td>
                <div class="form-group">
                    <label for="NomCommercial">NomCommercial</label>
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
                    <input type="textbox" id="composition" name="composition">
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