<?php 
require '../Database/DatabaseConnection.php';
include '../Repository/CourseRepository.php';
$db = new DatabaseConnection();
$conn = $db->getConnexion();

?>
<?php 
 require "../Entity/Course.php";
 require "../Entity/user.php";
 require "../Entity/Formateur.php";
 echo "here";
//  $nom, $prenom, $role, $email, $telephone,$specialite,$titrecours,$formateur,$depatement
echo "<pre>"; 
var_dump($test);
echo "</pre>"; 




?>