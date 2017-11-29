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
        $this->load->model('Model_Famille');
           
        $data['medicament'] = $this->Model_Medicament->GetAllMedicament();
        $data['famille'] = $this->Model_Famille->GetAllFamille();
        
        $this->load->view('v_Medicament',$data);
    }
    public function afficherPrecription()
            {
                $this->load->model('Model_Prescription');
                 $data['LesPrescription'] = $this->Model_Prescription->GetAllMedicament();
               $data['lesindividus'] = $this->Model_Prescription->afficherLesIndividus();
               $data['lesdosages'] =  $this->Model_Prescription->afficherLesDosages();
                $this->load->view('v_Prescription',$data); 
            }
    public function afficherDeconseiller()
            {
               $this->load->model('Model_Deconseiller');
               
               $data['medicament'] = $this->Model_Deconseiller->GetAllMedicament();

               
               $data['medicamentn'] = $this->Model_Deconseiller->GetAllNMedicament();

               $this->load->view('v_Deconseiller',$data); 
            }
            public  function afficherStats()
            {
                $this->load->model('Model_Stats');
                
                $data['stats'] = $this->Model_Stats->GetAllStats();
                
                $this->load->view('v_Stats',$data); 
            }
   }
 