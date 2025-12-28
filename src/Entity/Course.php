<?php
 class Course
   {
    protected string $titrecours;
    private  array $formateur;
    private array $departement;


    public function __construct($titrecours, $formateur, $departement)
    {
        $this->titrecours = $titrecours;
        $this->formateur = $formateur; 
        $this ->departement = $departement;
       


    }
    public function getTitecours()
    {
        return $this->titrecours;
    }
    public function setTitecours($titrecours)
    {
        $this->titrecours = $titrecours;

    }



}


?>