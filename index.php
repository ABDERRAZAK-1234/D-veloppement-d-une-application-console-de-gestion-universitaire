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
use Entity\Formateur;
use Entity\Etudiant;
use Entity\Course;


 echo "\n===== MENU =====\n";
    echo "1. Create\n";
    echo "2. Read\n";
    echo "3. Update\n";
    echo "4. Delete\n";
    echo "5. Exit\n";

$db = new DatabaseConnection();
$conn = $db->getConnexion();

?>