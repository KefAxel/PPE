<?php
class Model_Medicament extends CI_Model{
    
    public function GetAllMedicament(){
        
      $sql = $this->db->query("select * from medicament");
      return $sql -> result();
        
        
    }
      public function GetAllFamille($data1){
        
      $sql = $this->db->query("select * from famille");
      return $sql -> result();
        
        
    }

}

