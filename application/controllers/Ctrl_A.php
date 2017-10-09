<?php
class Ctrl_A extends CI_Controller{
    
    public function index(){
        
        $data['titre']='Bonjour';
       
            $this->load->model('Model_Medicament');
           
        $data['medicament'] = $this->Model_Medicament->GetAllMedicament();
        $this->load->view('v_Medicament',$data);
}
//
//    public function afficherIndividus() {
//        
//       $code = $_GET['codeIndividus'];
//                        
//       $model = $this->load->model('Model_Individus');
//       
//       $data['individu'] = $this->Model_Individu->afficherLesIndividus();
//       
//       $this->load->view('v_Individu',$data);
//    }
//    public  function afficherMedicaments(){
//        
//       $codeDepot = $_GET['codeDepot'];
//        
//       $model = $this->load->model('Model_Medicaments');
//       
//       $data['depot'] = $this->Model_Medicament->afficherLesMedicaments();
//       
//       $this->load->view('v_Medicament',$data);
//    }
   }
 