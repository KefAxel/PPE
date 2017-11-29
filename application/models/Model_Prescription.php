<?php
class Model_Prescription extends CI_Model{
    
    public function GetAllMedicament(){
        
      $sql = $this->db->query("select * from medicament");
      return $sql -> result();
        
        
    }
    public function afficherLesIndividus(){
        
      $sql = $this->db->query("select * from type_individu");
      return $sql -> result();
        
        
    }
    public function afficherLesDosages(){
        
      $sql = $this->db->query("select * from dosage");
      return $sql -> result();
        
        
    }
}

