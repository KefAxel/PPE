<html>
    <head>
        <title>Individu</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctions.js"></script>  
         <script type="text/javascript">
         
              $
           (
               function()
                {
                    
                    $('#lstIndividu').change(function(){
                      
                    $('#code').val($('#lstIndividu').val());
                    $('#libelle').val($('#lstIndividu option:selected').attr('name'));


                    });
                }
             );
      
                    
         
        </script>
    </head>
        <a href=afficherLesMedicament>afficher les Medicaments</a>
        <a href=http://localhost/SIO2/Medecin/index.php/Ctrl_A/>Retour au menu</a>

    <table cellspacing="2px" cellpadding="2px" rules="all">
            <tr>
            <th>Code </th>
            <th>Libelle</th>
            </tr>  
            
<!--      
<select id="lstmedicament" size="20">-->
<?php 
//echo "input type='button' href='index.php/Ctrl_A/afficherIndividus'";
foreach ($lesindividus as $individus)
    {

echo "<tr>";
echo "<td>".$individus->TIN_CODE."</td>";
echo "<td>".$individus->TIN_LIBELLE."</td>";
        echo "</tr>";
        
}
?>        
 </table> 
     <select id="lstIndividu">
                
                    <?php
                    foreach ($lesindividus as $individus)
                    {
                    ?>
                

     <option name="<?php echo $individus->TIN_LIBELLE;?>" 
             value="<?php echo $individus->TIN_CODE; ?>"

             ><?php echo $individus->TIN_LIBELLE; ?></option>
                    <?php
                    }
                    ?>
            </select>

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
                    <label for="Code">Code</label>
                    <input type="textbox" id="code" name="code">
                </div>
            </td>

            <td>
                <div class="form-group">
                    <label for="Libelle">Libelle</label>
                    <input type="textbox" id="libelle" name="libelle">
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
    $libelle = $this->input->post('libelle');


    $data = array(
        'TIN_CODE' => $code,
        'TIN_LIBELLE' => $libelle,
    );
    $this->db->set('TIN_CODE', $code);
$this->db->set('TIN_LIBELLE', $libelle);
    $this->db->where('TIN_CODE', $code);
$this->db->update('type_individu',$data);
           
     header("refresh: 0;");

}

if($this->input->post('insert') != ''){
/*Perform insert operation here*/

    $code = $this->input->post('code');
    $libelle = $this->input->post('libelle');


    $data = array(
        'TIN_CODE' => $code,
        'TIN_LIBELLE' => $libelle,
    );


    $this->db->insert('type_individu',$data);
     header("refresh: 0;");
}
?>
</form>
</html>