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
                    
                    $('#lstIndividu').change(function(){
                      
                    $('#libelle').val($('#lstIndividu').val());
                    });
                    
                }
             );
      
                    
         
        </script>
    </head>
<?php

        echo "<select id='lstIndividu'>";


                    foreach ($lesindividus as $individus)
                    {


                        echo "<option id='opt1' value='".$individus->TIN_CODE."'>".$individus->TIN_LIBELLE."</option>";



                    }


       echo "</select>";
   ?>

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