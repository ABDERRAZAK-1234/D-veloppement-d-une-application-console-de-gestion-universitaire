<?php 

require_once '../Abstract/Person.php';
class Formateur extends Person
{
    public string $specialite;

    public function __construct($specialite)
    {
        $this->specialite = $specialite;
    }
    

    
}

?>