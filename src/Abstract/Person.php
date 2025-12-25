<?php

 abstract class Person
{
    protected string $nom;
    protected string $prenom;
    protected string $email;
    protected string $telephone;
    public function __construct($nom, $prenom, $email, $telephone,)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->telephone = $telephone;
    }
    

    public function setName(string $nom)
    {
        $this->nom = $nom;
    }

    public function getName() : string
    {
        return $this->nom;
    }
     public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getPrenom()
    {
        return $this->nom;
    } 
    public function setEmail(string $email)
    {
        $this->email = $email;
    }
   public function getEmail(): string
    {
       return $this->email;
    }
    public function setTelephone(string $telephone)
    {
        $this->telephone = $telephone;
    }
    public function getTelephone() : string{
        return $this->telephone;
    }
    

}

?>