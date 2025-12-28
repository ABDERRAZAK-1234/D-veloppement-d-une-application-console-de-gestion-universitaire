<?php 
require '../src/Database/DatabaseConnection.php';
include '../src/Repository/CourseRepository.php';
$db = new DatabaseConnection();
$conn = $db->getConnexion();

?>
<?php 
 require "../src/Entity/Course.php";
 require "../src/Entity/user.php";
 require "../src/Entity/Formateur.php";
 echo "here";
//  $nom, $prenom, $role, $email, $telephone,$specialite,$titrecours,$formateur,$depatement
$test = new Formateur('MOUAD','sertati','admine','mouad@gmail.com','06736733','onizuka',["php",'js,java']);
echo "<pre>"; 
var_dump($test);
echo "</pre>"; 
echo"long";



?>