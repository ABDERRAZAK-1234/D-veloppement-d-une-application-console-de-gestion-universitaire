<?php 

require_once '../Abstract/Person.php';
class Formateur extends Person
{
    public string $specialite;

    public function __construct($nom, $prenom, $role, $email, $telephone, $password,$specialite)
    {
        
        $this->specialite = $specialite;
    }


    // public function toString()
    // {
    //     parent :: toString().
    //     "";
    // }

    
}



?>