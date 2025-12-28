<?php 
require_once '../Abstract/Person.php';
class Etudiant extends Person
{
    protected string $cne;

    public function __construct($nom, $prenom, $email, $telephone, $role,$cne)
    {
        parent :: __construct($nom,$prenom,$role,$email,$telephone);
    }

    public function getCne():string
    {
        return $this->cne;
    }
    public function setCne(string $cne)
    {
        $this->cne=$cne;
    }

    public function toString(): string
    {
        return parent::toString() . ", CNE: {$this->cne}";
    }
}

?>