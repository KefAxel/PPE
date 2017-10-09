<?php
class Model_Medicament extends CI_Controller{
    
    public function GetAllMedicament(){
        
      $sql = $this->db->query("select * from medicament");
      return $sql -> result();
        
        
    }
}
