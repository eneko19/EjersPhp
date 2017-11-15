<?php
//Connectar a una Base de dates
$servername = "localhost";
$username = "eneko";
$password = "eneko";
$dbname = "ComponentsBD";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "select id, tipo, model, descripcion, preu from components";
/*function cerrarConexion($conn){
  $conn->close();
}*/
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
/*  ALTA */

  $tipo = test_input($_POST["tipos"]);
  $modelo = test_input($_POST["modelo"]);
  $precio = test_input($_POST["precio"]);
  $descripcion = test_input($_POST["descripcion"]);

  $consulta = "INSERT INTO components (tipo, model, descripcion, preu) VALUES
   ('$tipo', '$modelo', '$descripcion', $precio)";

   if ($conn->query($sql) === TRUE) {
       header('location: index.php');
   }







 ?>
