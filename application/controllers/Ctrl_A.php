<?php
class Ctrl_A extends CI_Controller{
    
    public function index(){
        
        $data['titre']='Bonjour';
       
            $this->load->model('Model_Medicament');
           
        $data['medicament'] = $this->Model_Medicament->GetAllMedicament();
        
        $this->load->view('v_Medicament',$data);
}

    public function afficherIndividus() 
            {
       $codeIndividus = $_GET['codeIndividus'];
                        
       $this->load->model('Model_Individus');
       
       $data['lesindividus'] = $this->Model_Individus->afficherLesIndividus();
       
       $this->load->view('v_Individus',$data);
    }
   }
 