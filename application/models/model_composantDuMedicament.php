<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_composantDuMedicament
 *
 * @author user
 */
class model_composantDuMedicament  extends CI_Model{
    //put your code here
      public function GetComposantDuMedicament($MED_DEPOTLEGAL)
            {
                 $sql = $this->db->query("SELECT * FROM composant, constituer WHERE composant.CMP_CODE = constituer.CMP_CODE and constituer.MED_DEPOTLEGAL='".$MED_DEPOTLEGAL."'");
                  return $sql->result();
            }
}
