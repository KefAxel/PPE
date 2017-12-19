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
         public function GetMedicamentDecon($MED_MED_PERTURBE)
            {
                 $sql = $this->db->query("select medicament.MED_NOMCOMMERCIAL from medicament 
                     WHERE medicament.MED_DEPOTLEGAL in
             (select interagir.MED_PERTURBATEUR
              from interagir
              where interagir.MED_MED_PERTURBE ='".$MED_MED_PERTURBE."'");
                 
                  return $sql->result();
            }

}

