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
         public function GetComposantDuMedicament($MED_PERTURBE)
            {
                 $sql = $this->db->query("SELECT MED_MED_PERTURBE FROM interagir WHERE MED_PERTURBE='".$MED_PERTURBE."'");
                  return $sql->result();
            }

}

