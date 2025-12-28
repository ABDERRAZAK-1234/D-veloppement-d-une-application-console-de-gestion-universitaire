<?php

namespace Database;

use PDO;
use PDOException;
class DatabaseConnection
{
    private PDO $conn;
    private string $host = "localhost";
    private string $db_name = "application_console_gestion_universitaire";
    private string $username = "root";
    private string $password = "";

    public function __construct()
    {
        $dsn = "mysql:host=$this->host;dbname=$this->db_name;charset=utf8";
        try {
             $this->conn = new PDO(
                $dsn,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            echo 'Connexion succes';
        } catch (PDOException $e) {
            echo ('Erreur lors de connexion' . $e->getMessage());
        }
    }

    public function getConnexion(): PDO
    {
        return $this->conn;
    }
}
