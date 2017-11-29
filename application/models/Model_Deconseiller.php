<?php
class Model_Deconseiller extends CI_Model{
    
    public function GetAllMedicament(){
        
      $sql = $this->db->query("select * from medicament");
      return $sql -> result();
        
      
    }
    
    public function GetAllNMedicament(){
        
      $sql = $this->db->query("select * from interagir");
      return $sql -> result();
        
    }
            
 public function GetAllMedicamentDeco(){
      $sql = $this->db->query("select * from interagir");
      return $sql -> result();
        
      
    }
}

