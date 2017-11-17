<?php
//Connectar a una Base de dates
$servername = "localhost";
$username = "eneko";
$password = "eneko";
$dbname = "ComponentsBD";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Funcion para limpiar el código
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

/*  ALTA */

// Limpiamos el codigo
  $tipo = test_input($_POST["tipos"]);
  $modelo = test_input($_POST["modelo"]);
  $precio = test_input($_POST["precio"]);
  $descripcion = test_input($_POST["descripcion"]);

// variable que guarda la sentencia para insertar los datos
  $consulta = "INSERT INTO components (tipo, model, descripcion, preu) VALUES
   ('$tipo', '$modelo', '$descripcion', '$precio')";

// Si se hace correctamente pasa al archivo index.php si no escribe un error
   if ($conn->query($consulta) === TRUE) {
       header('location: index.php');
   }else {
     echo "ERROR";
   }

   /* BAJA */

   if(isset ($_GET["id"])){
        $id=test_input($_GET["id"]);
        $sql = "DELETE FROM components WHERE id ='$id'";
        if ($conn->query($sql) === TRUE) {
            header('Location: index.php');
        }else {
            echo "<br>Error:" . $conn->error;
        }
    }
 ?>
