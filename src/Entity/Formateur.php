<?php 

namespace Entity;
use AbstractClass\Person;
class Formateur extends Person
{
    public string $specialite;

    public function __construct($nom, $prenom, $role, $email, $telephone, $password,$specialite)
    {
        
        $this->specialite = $specialite;
    }



    
}



?>