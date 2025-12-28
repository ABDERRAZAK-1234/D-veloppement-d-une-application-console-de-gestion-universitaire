<?php 
require_once '../Database/DatabaseConnection.php';
require '../src/Abstract/Person.php';
require '../src/Entity/Course.php';
require '../src/Entity/Departement.php';
require '../src/Entity/Etudiant.php';
require '../src/Entity/Formateur.php';
$db = new DatabaseConnection();
$conn = $db->getConnexion();

?>
<?php 



 echo "here";
$test = new Course("php",["name_of_farmateur"=>"sara",],["name_of_Departement"=>'gen v']);
echo"<pre>";
var_dump($test);
echo"<pre>";

?>