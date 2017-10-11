
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
        <?php

if($this->input->post('insert') != ''){
/*Perform insert operation here*/

    $code = $this->input->post('code');
    $libelle = $this->input->post('libelle');


    $data = array(
        'TIN_CODE' => $code,
        'TIN_LIBELLE' => $libelle,
    );


    $this->db->insert('type_individu',$data);
}
?>
</form>