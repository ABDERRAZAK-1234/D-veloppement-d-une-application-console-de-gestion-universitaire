<?php   
class Course {
    private string $nom ;
    private array $formateur;
    private array $departement;


       public function __construct($nom,$formateur,$departement)
       {
            $this->nom = $nom;
            $this->formateur = $formateur;
            $this->departement =$departement;

      
       }
       
    
    
}


?>