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
                $sql = $this->db->query("SELECT constituer.CMP_CODE, CMP_LIBELLE, CST_QTE, MED_NOMCOMMERCIAL, MED_COMPOSITION FROM composant, constituer,medicament 
WHERE composant.CMP_CODE = constituer.CMP_CODE 
and medicament.MED_DEPOTLEGAL = constituer.MED_DEPOTLEGAL
and constituer.MED_DEPOTLEGAL = '".$MED_DEPOTLEGAL."'");
                 return $sql->result();
            }
               public function GetComposant()
            {
                $sql = $this->db->query(" select * from composant ");
                return $sql->result();
            }
    
       public  function ModifierQuantite($num,$qte,$numComp)
            {
                $sql = $this->db->query("update constituer set CST_QTE= ".$qte. " where MED_DEPOTLEGAL = '".$num."' and CMP_CODE = ".$numComp);
                
            }
       public function AjouterQuantite($num,$comp,$Comp)
       {
           $sql = $this->db->query();
       }
}
