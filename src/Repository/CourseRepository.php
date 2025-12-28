<?php 
require "../Database/DatabaseConnection.php";

class UserRepository extends DatabaseConnection{

    public function create(User $user) {
        $stmt = $this->conn->prepare("INSERT INTO users VALUES (?, ?, ?, ?, ?)");
        $stmt ->execute([
            
        ]);

    }

}
?>