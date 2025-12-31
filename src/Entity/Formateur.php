<?php

namespace Entity;
use AbstractClass\Person;

class Formateur extends Person
{
    protected string $specialite;
    protected array $course;

    public function __construct($nom, $prenom, $role, $email, $telephone,$specialite, $course)
    {
        parent::__construct($nom, $prenom, $role, $email, $telephone);

       $this -> course = $course;
        $this->specialite = $specialite;
    }
    public function getSpecialite (){
        return $this -> specialite;
    }
      public function setSpecialite ($specialite){
         $this -> specialite = $specialite;
    }

}



?>