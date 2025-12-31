<?php   
namespace Entity;
class Course {
    private string $nom ;
    private object $formateur;
    private object $departement;


       public function __construct($nom,$formateur,$departement)
       {
            $this->nom = $nom;
            $this->formateur = $formateur;
            $this->departement =$departement;

      
       }
       
    
    
}


?>