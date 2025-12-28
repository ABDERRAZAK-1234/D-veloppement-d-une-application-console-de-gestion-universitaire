<?php
namespace AbstractClass;
    abstract class Person
{
    protected string $nom;
    protected string $prenom;
    protected string $email;
    protected string $telephone;
    protected string $role;
    public function __construct($nom, $prenom, $email, $telephone,$role)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->role = $role;
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

    public function setRole(string $role)
    {
        $this->role=$role;
    }
    public function getRole():string
    {
        return $this->role;
    }
    
    public function toString(): string
    {
        return "Nom: {$this->nom}, Prenom: {$this->prenom}, Email: {$this->email}, Telephone: {$this->telephone}, Role: {$this->role}";
    }

}

?>