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
class model_composant extends CI_Controller{
    public function GetComposant()
            {
                  $sql = $this->db->query(" select * from composant ");
                return $sql->result();
            }
    
}
