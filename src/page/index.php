<?php 
require_once '../Database/DatabaseConnection.php';
$db = new DatabaseConnection();
$conn = $db->getConnexion();

?>
<?php 
 require "../Entity/Course.php";
 require "../Entity/Formateur.php";
 echo "here";
$test = new Formateur('MOIUAD',);
echo "<pre>"; 
var_dump($test);
echo "</pre>"; 



?>