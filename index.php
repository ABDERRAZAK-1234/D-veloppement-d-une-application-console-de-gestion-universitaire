<?php

// auto load
function Autoloader($class) {
    $class = str_replace('\\', '/', $class);

    $Direction = 'src/';

    // le chemin complet de fichier 
    $file = $Direction . $class . '.php';

    // Vérifier le fichier existe
    if (file_exists($file)) {
        require_once $file;
    }
}
// save autoload
spl_autoload_register('Autoloader');

// Utilisation des classes 
// use GestionUniversitaire\Entity\Department;
use Database\DatabaseConnection;
use AbstractClass\Person;
// use Entity\Formateur;
use Entity\Etudiant;

$etud = new Etudiant('aamaich', 'abderrazak','aamaich@gmail.com', '0766428735','Etudiant','JA187960');
var_dump($etud);
$db = new DatabaseConnection();
$conn = $db->getConnexion();

?>