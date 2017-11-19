<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_composant
 *
 * @author user
 */
class model_composantMedicament extends CI_Model{
    public function GetMedicament()
            {
                  $sql = $this->db->query(" select * from constituer ");
                return $sql->result();
            }
    public function GetComposantDuMedicament($MED_DEPOTLEGAL)
            {
                 $sql = $this->db->query("SELECT CMP_CODE,CMP_LIBELLE FROM composant, constituer WHERE composant.CMP_CODE = constituer.CMP_CODE and MED_DEPOTLEGAL='".$MED_DEPOTLEGAL."'");
                  return $sql->result();
            }
    
}
