<?php 
namespace Entity;
  class Departement {
    private string $nom;
   private string $numero_Departement ;
   
   
   public function __construct($nom,$numero_Departement)
   {
      $this->nom = $nom;
      $this->numero_Departement = $numero_Departement;

   } 
  }

?>