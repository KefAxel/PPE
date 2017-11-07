<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ctrl_Gestion_Composant
 *
 * @author user
 */
class Ctrl_K extends CI_Controller {
    public function index()
            {
                $this->load->model('model_composant');
                $data['titre'] = "Liste composant";
                 $data['LesComposants'] = $this->model_composant->GetComposant();
                $this->load->view('v_Composant',$data); 
            }

            
            
    
}
