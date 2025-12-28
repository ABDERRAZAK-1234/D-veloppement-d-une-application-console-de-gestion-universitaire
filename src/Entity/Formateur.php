<?php

require_once '../Abstract/Person.php';

class Formateur extends Person
{
    protected string $specialite;
    protected array $course;

    public function __construct($nom, $prenom, $role, $email, $telephone,$specialite,$course)
    {
        parent::__construct($nom, $prenom, $role, $email, $telephone);

       $this -> course = $course;
        $this->specialite = $specialite;
    }


    // public function toString()
    // {
    //     parent :: toString().
    //     "";
    // }

}



?>