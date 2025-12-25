<?php 

require_once '../Abstract/Person.php';
class Formateur extends Person
{
    public string $specialite;

    public function __construct($nom, $prenom, $role, $email, $telephone, $password,$specialite)
    {
        parent :: __construct($nom, $prenom, $role, $email, $telephone, $password);
        $this->specialite = $specialite;
    }


    // public function toString()
    // {
    //     parent :: toString().
    //     "";
    // }

    
}



?>