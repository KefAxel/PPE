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
class Ctrl_Gestion_Composant extends CI_Controller {
    public function index()
            {
                $this->load->model('model_composant');
                $data['titre'] = "Liste composant";
                $data['LesComposants'] = $this->model_composant->GetComposant();
                $this->load->view('v_Composant',$data); 
            }
     public function composantMedicament()
            {
                $this->load->model('model_composantMedicament');
                $data['titre'] = "Liste composant medicament";
                 $data['LesMedicaments'] = $this->model_composantMedicament->GetMedicament();
                $this->load->view('v_ComposantMedicament',$data); 
            }
    public function presentationMedicament()
    {
        $this->load->model('model_presentationMedicament');
        $data['titre'] = "Presentation composant";
         $data['LaPresentation_Medicament'] = $this->model_presentationMedicament->GetPresentationtMedicament();
        $this->load->view('v_PresentationMedicament',$data); 
    }
    public function ModifierComposant()
    {
       $nomCoposant = $_GET['nomCoposant'];
       $code = $_GET['code'];
       $data['lesComposants'] = $this->model_modifMedicament->GetModifierMedicament();
       $this->load->view('v_Composant',$data);


    }
    public function afficherMedicament()
    {
        $this->load->model('model_medicament');
        $data['titre'] = "Presentation composant";
         $data['lesMedicaments'] = $this->model_medicament->GetAfficherMedicament();
        $this->load->view('v_Medicament',$data); 
    }
            
    public function AfficherComposantMedicaments()
    {
        // A toi de jouer ici
        
    }
    
}
