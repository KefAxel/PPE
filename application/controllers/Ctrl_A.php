<?php
class Ctrl_A extends CI_Controller{
    
    public function index(){
        
        $this->load->view('v_Accueil');
}

    public function afficherIndividus() 
            {
//       $codeIndividus = $_GET['codeIndividus'];
                        
       $this->load->model('Model_Individus');
       
       $data['lesindividus'] = $this->Model_Individus->afficherLesIndividus();
       
       $this->load->view('v_Individus',$data);
    }
    public function afficherLesMedicament() 
            {
//       $codeIndividus = $_GET['codeIndividus'];
                        
        $this->load->model('Model_Medicament');
           
        $data['medicament'] = $this->Model_Medicament->GetAllMedicament();
        
        $this->load->view('v_Medicament',$data);
    }
    public function afficherComposant()
            {
                $this->load->model('model_composant');
                 $data['LesComposants'] = $this->model_composant->GetComposant();
                $this->load->view('v_Composant',$data); 
            }
   }
 