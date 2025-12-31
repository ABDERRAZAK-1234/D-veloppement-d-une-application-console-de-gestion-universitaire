<?php

class CourseCRUD
{
  
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    
    public function create(string $titrecours, array $formateur, array $departement)
    {
        $sql = "INSERT INTO courses (titrecours, formateur, departement)
                VALUES (:titrecours, :formateur, :departement)";

        $stmt = $this->pdo->prepare($sql);
     $stmt->execute([
            ':titrecours' => $titrecours,
            ':formateur' => $formateur,
            ':departement' => $departement
        ]);
    }

    
    public function getById(int $id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM courses WHERE id = :id");
        $stmt->execute([':id' => $id]);
       $stmt->fetch(PDO::FETCH_ASSOC);
    }


    public function update(int $id, string $titrecours, array $formateur, array $departement)
    {
        $sql = "UPDATE courses 
                SET titrecours = :titrecours,
                    formateur = :formateur,
                    departement = :departement
                WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            ':titrecours' => $titrecours,
            ':formateur' => $formateur,
            ':departement' => $departement,
            ':id' => $id
        ]);
    }

    public function delete(int $id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM courses WHERE id = :id");
      $stmt->execute([':id' => $id]);
    }
}
