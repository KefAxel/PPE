<html>
    <head>
        <title>Individu</title>
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
                    
                    $('#lstIndividu').change(function(){
                      
                    $('#code').val($('#lstIndividu').val());
                    $('#libelle').val($('#lstIndividu option:selected').attr('name'));


                    });
                }
             );
     
     
      
                    
         
        </script>
    </head>
    
    <div class="container-fluid">
         <div class="container">
  <h1 align="center">Gestion des Individus</h1>                
  <ul class="pagination">
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

 <div class="col-sm-4" >
     <label><h3>Liste des individus</h3></label>
    <table  class="table table-striped" cellspacing="2px" cellpadding="2px" rules="all">
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
     <a href=http://localhost/SIO2/Medecin/index.php/Ctrl_A/>Retour au menu</a>
 </div>

<br>
<div class="col-sm-8" >
<h3>Selectionner un individu a modifier ou ajouter un individu</h3>
<label>Choix d'un Individu</label>
<br>
     <select id="lstIndividu" >
                
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
<br>
<br>

<form method="post">  
<tr>
            <td>
                <div class="form-group">
                    <label for="Code">Code</label>
                    <br>
                    <input type="textbox" id="code" name="code">
                </div>
            </td>

            <td>
                <div class="form-group">
                    <label for="Libelle">Libelle</label>
                    <br>
                    <input type="textbox" id="libelle" name="libelle">
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
</div>

</div>
    
</html>