<?php

//Connectar a una Base de dates
$servername = "localhost";
$username = "toni";
$password = "toni";
$dbname = "basedatos";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
else {
   echo "Connected successfully";
}


//CONSULTA

   $sql = "SELECT * FROM coches";
   $result = $conn->query($sql);

   if ($result->num_rows > 0) {
       // output data of each row
       while($row = $result->fetch_assoc()) {
           echo "El coche de matricula " . $row["matricula"] . " es de color " . $row["color"] .  "<br>";
       }
   } else {
       echo "0 results";
   }

/*
//AFEGIR
$sql = "INSERT INTO coches (matricula, modelo, color)  VALUES ('1234-HHH','fiesta','rojo')";
if ($conn->query($sql) === TRUE) {
    echo "Nou registre creat";
} else {
    echo "<br>Error:" . $conn->error;
}
*/

/*
//MODIFICAR
$sql = "UPDATE coches SET color = 'verde' WHERE  matricula='1234-HHH'";
if ($conn->query($sql) === TRUE) {
    echo "Registre modificat";
} else {
    echo "<br>Error:" . $conn->error;
}
*/


//ELIMINAR
$sql = "DELETE FROM coches WHERE  identificador=3";
if ($conn->query($sql) === TRUE) {
    echo "Registre modificat";
} else {
    echo "<br>Error:" . $conn->error;
}

?>
