<?php 
require '../Database/DatabaseConnection.php';
include 'src/Repository/UserRepository.php';
$db = new DatabaseConnection();
$conn = $db->getConnexion();

?>
<?php 
 require "../Entity/Course.php";
 require "../Entity/user.php";
 require "../Entity/Formateur.php";
 echo "here";
//  $nom, $prenom, $role, $email, $telephone,$specialite,$titrecours,$formateur,$depatement
$test = new Formateur('MOUAD','sertati','admine','mouad@gmail.com','06736733','onizuka',["php",'js,java'],'kk');
echo "<pre>"; 
var_dump($test);
echo "</pre>"; 



?>