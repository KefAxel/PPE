<?php
class Model_Individus extends CI_Model{
    
    public function afficherLesIndividus(){
        
      $sql = $this->db->query("select * from type_individu");
      return $sql -> result();
        
        
    }
     function ajouter_individu($data){
        $query = $this->db->insert('type_individu', $data);
    

    }
    
//    public function ajouterLesIndividus(){
//        $data = array(
//        'title' => 'My title',
//        'name' => 'My Name',
//        'date' => 'My date'
//);
//
//$this->db->insert('mytable', $data);
//// Produces: INSERT INTO mytable (title, name, date) VALUES ('My title', 'My name', 'My date')
//    }
}
