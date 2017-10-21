<?php
class Model_Medicament extends CI_Controller{
    
    public function GetAllMedicament(){
        
      $sql = $this->db->query("select * from medicament");
      return $sql -> result();
        
        
    }
    function ajouter_medicament($data){
        $query = $this->db->insert('medicament', $data);


    }
    public function getMedicamentById($codeMedicament)
    {
        $sql = $this->db->query("SELECT * FROM medicament where MED_DEPOTLEGAL = '".$codeMedicament."'");
        return $sql->result();
    }
    
}

