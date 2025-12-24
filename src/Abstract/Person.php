<?php
class Person
{

    private string $nom;
    private string $prenom;
    private string $role;
    private string $email;
    private string $telephone;
    private string $password;
    public function __construct($nom, $prenom, $role, $email, $telephone, $password)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->role = $role;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->password = $password;
    }

    public function setName($nom)
    {
        $this->nom = $nom;
    }

    public function getName($nom)
    {
        return $this->nom;
    }
     public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getPrenom($prenom)
    {
        return $this->nom;
    } public function setRole($role)
    {
        $this->role = $role;
    }

    public function getRole($role)
    {
        return $this->role;
    } 
    public function setEmail($email)
    {
        $this->email = $email;
    }
   public function getEmail($email)
    {
       return $this->email = $email;
    }

    public function getPassword($password)
    {
        return $this->password;
    } 
    public function setPassword($password)
    {
        $this->password = $password;
    }
    

}

?>