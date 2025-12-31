<?php

namespace AbstractClass;
abstract class Person
{

    private string $nom;
    private string $prenom;
    private string $role;
    private string $email;
    private string $telephone;
   
    public function __construct($nom, $prenom, $role, $email, $telephone)
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
        return $this->prenom;
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

    
    public function toString(): string
    {
        return "Nom: {$this->nom}, Prenom: {$this->prenom}, Email: {$this->email}, Telephone: {$this->telephone}, Role: {$this->role}";
    }

}

?>