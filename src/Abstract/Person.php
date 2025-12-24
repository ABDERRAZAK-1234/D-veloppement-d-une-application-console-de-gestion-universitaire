<?php
class Person
{

    private string $nom;
    private string $prenom;
    private string $role;
    private string $email;
    private string $telephone;
    private string $password;
    function __construct($nom, $prenom, $role, $email, $telephone, $password)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->role = $role;
        $this->email = $email;
        $this->telephone = $telephone;
        $this->password = $password;
    }
    

}

?>