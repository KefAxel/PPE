<html>
    <head> 
          <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

<script type="text/javascript" src="<?php echo base_url();?>JQuery/jquery-3.1.1.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>JS/lesFonctions.js"></script>
          <script>
              
            $
            
            (
              function()      
                {
                    $('#lstMedicament').change(function(){

                        $('#Quantiter').val($('#lstMedicament').val()); 
                    });
                    
                    $('#btnUpdate').click
                    (
                        function()
                        {
                            ModifierQuantite();
                             window.location.reload("v_ComposantDuMedicament.php");
                            
                            
                        }
                    );
                    $('#btnAjouter').click
                    (
                         function()
                         {
                             $('#lstComposant').change(function(){
                                 
                               $('#lstComposant').val($('#lstComposant option:selected').text());  
                                 
                                 
                                 
                                        
                                 
                             }
                                     
                
                
                
                );
                         }
                            
                            
                    );
                }              
            );      
              
              </script>
    </head>
    <body>
        <div id="Tableau" align="left">
            
            
            <table cellspacing="1px" cellpadding="1px" rules="all">

        </div>
       
            <tr>
            <th>DepotLegal </th>
            <th>Composant</th>
            <th>Quantiter</th>
            <th>Nom commerciale</th>
            </tr>
            
  <?php  
  
  foreach ($lesComposantDuMedicament as $constituer)
      {
     echo "<tr>";
        echo "<td>".$constituer->CMP_CODE."</td>";
        echo "<td>".$constituer->CMP_LIBELLE."</td>";
        echo "<td>".$constituer->CST_QTE."</td>";
        echo "<td>".$constituer->MED_NOMCOMMERCIAL."</td>";
        echo "</tr>";
      }
  
  ?>
            </table>
            <br>

            <select multiple="" id="lstComposant">
                 <?php 
            
           
         
                foreach ($LesComposants as $composant)
                    {
                        echo "<option id='opt1' value='".$composant->CMP_CODE."'>".$composant->CMP_LIBELLE."</option>";
                    }
                   
                    
            ?>
            </select>
            
             <form method="post">
           
                 <input  id="btnAjouter" type="button" name="ajouter" value="Ajouter" /><br>
                 
                
        
            
       
    
            <tr>
            <td>
                <div class="form-group">
                    <label for="Quantiter">Quantiter</label>
                    <input type="textbox" id="txtQte" name="Quantiter">
                </div>
               
            
                <input id="btnUpdate" type="button" name="update" value="Update" />
               
            
             </tr>
           <?php
             header("refresh: 0;");
            ?>
<!--//if($this->input->post('update') != ''){
//
//    
//    $Quantiter = $this->input->post('Quantiter');
//  
//    
//    $data = array(
//        'CST_QTE' => $Quantiter,
//       
//    );
// $this->db->set('CST_QTE', $Quantiter);
// $this->db->where('MED_DEPOTLEGAL', $depotlegal);
//$this->db->update('constituer',$data);
//           
//     header("refresh: 0;");
//
//}-->


 </form>
        
        
        </body>
        </html>