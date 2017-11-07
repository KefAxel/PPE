<?php
class Model_Famille extends CI_Model{
    
      public function GetAllFamille(){
        
      $sql = $this->db->query("select * from famille");
      return $sql -> result();
        
        
    }

}

