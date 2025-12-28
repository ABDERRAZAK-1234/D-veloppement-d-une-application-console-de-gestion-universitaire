<?php


class User extends Person
{



    private string $username;
    private string $password;
    public function __construct($nom, $prenom, $role, $email, $telephone, $username, $password)
    {
        parent::__construct($nom, $prenom, $role, $email, $telephone);
        $this->username = $username;
        $this->password = $password;
    }
    public function getUsername()
    {
        return $this->username ;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }

}


?>