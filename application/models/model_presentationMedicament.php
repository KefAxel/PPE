<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model_presentationMedicament
 *
 * @author user
 */
class model_presentationMedicament extends CI_Controller {
    //put your code here
    public function GetMedicaments()
            {
                $sql = $this->db->query("select * from medicament");
                return $sql->result();
            }
    public function GetPresentationDuMedicament($MED_DEPOTLEGAL)
            {
                 $sql = $this->db->query("SELECT * FROM medicament, presentation WHERE medicament.MED_DEPOTLEGAL = presentation.PRE_CODE and medicament.MED_DEPOTLEGAL='".$MED_DEPOTLEGAL."'");
                return $sql->result();
            }    
            
            
    
    
}
