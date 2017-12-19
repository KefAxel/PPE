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
            
            
            
            public function PresentationMedicament()
                    {
                          $this->load->model('model_presentationMedicament');
                          $data['LesMedicaments2'] = $this->model_presentationMedicament->GetMedicaments();
                          $this->load->view('v_presentationMedicament',$data); 
                    }

                        public function AfficherPresentationMedicaments()
    {
        
                        $MED_DEPOTLEGAL = $_GET['MED_DEPOTLEGAL'];
                        $model =  $this->load->model('model_presentationMedicament');
                        $data['lesPresentationDuMedicament'] = $this->model_presentationMedicament->GetPresentationDuMedicament($MED_DEPOTLEGAL);
                        $this->load->view('v_ComposantDuMedicament',$data);
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
        $MED_DEPOTLEGAL = $_GET['MED_DEPOTLEGAL'];
        $model =  $this->load->model('model_composantMedicament');
        $data['lesComposantDuMedicament'] = $this->model_composantMedicament->GetComposantDuMedicament($MED_DEPOTLEGAL);

          //$data['lesComposantDuMedicament2'] = $this->model_composantMedicament->GetMedicament();
           $this->load->model('model_composant');
           $data['LesComposants'] = $this->model_composant->GetComposant();
        $this->load->view('v_ComposantDuMedicament',$data);
        
        
    }
    public function ModifierQuantite()
    {
        $num = $_GET['num'];
        $qte = $_GET['qte'];
         $numComp = $_GET['numComp'];
        $model =  $this->load->model('model_composantMedicament');
        $data = $this->model_composantMedicament->ModifierQuantite($num,$qte,$numComp);
    }
    public function AjouterQuantite()
            {
                $num = $_GET['num'];
                $comp = $_GET['comp'];
                $numComp = $_GET['numComp'];
                 $model =  $this->load->model('model_composantMedicament');
                  $data = $this->model_composantMedicament->AjouterQuantite($num,$comp,$numComp);
            }
    
}
