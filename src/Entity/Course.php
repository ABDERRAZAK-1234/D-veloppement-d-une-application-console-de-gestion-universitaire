<?php
namespace Entity;
class Course
{
    protected string $titrecours;
    private array $formateur;
    private array $departement;

    public function __construct(string $titrecours, array $formateur, array $departement)
    {
        $this->titrecours = $titrecours;
        $this->formateur = $formateur; 
        $this->departement = $departement;
    }

    // Getter & Setter for titrecours
    public function getTitrecours(): string
    {
        return $this->titrecours;
    }

    public function setTitrecours(string $titrecours): void
    {
        $this->titrecours = $titrecours;
    }

 
    public function getFormateur(): array
    {
        return $this->formateur;
    }

    public function setFormateur(array $formateur): void
    {
        $this->formateur = $formateur;
    }

    public function getDepartement(): array
    {
        return $this->departement;
    }

    public function setDepartement(array $departement): void
    {
        $this->departement = $departement;
    }
}
?>
