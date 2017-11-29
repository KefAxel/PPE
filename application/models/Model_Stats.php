<?php
class Model_Stats extends CI_Model{
    

    public function GetAllStats(){
          

         $sql =$this->db->query('SELECT famille.FAM_LIBELLE,count(MED_DEPOTLEGAL) as nbmed
from medicament,famille
where medicament.FAM_CODE = famille.FAM_CODE
GROUP BY famille.FAM_LIBELLE');
         return $sql -> result();
    }

   
   


}

