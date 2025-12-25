<?php 
require_once '../Database/DatabaseConnection.php';
$db = new DatabaseConnection();
$conn = $db->getConnexion();

?>
<?php 
 require "../Entity/Course.php";
 echo "here";
$test = new Course("php",["name_of_farmateur"=>"sara",],["name_of_Departement"=>'gen v']);
echo"<pre>";
var_dump($test);
echo"<pre>";

?>