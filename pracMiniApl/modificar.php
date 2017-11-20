<?php
$id = $_GET["id"];

//Connectar a una Base de dates
$servername = "localhost";
$username = "eneko";
$password = "eneko";
$dbname = "ComponentsBD";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT tipo, model, descripcion, preu from components where id = $id";

// Guarda el resultado de la sentencia sql ejecutada en una variable
$result = $conn->query($sql);

$row = $result->fetch_assoc();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar</title>
    <style media="screen">

      .formulario{
        margin: auto;
        width: 60%;
        border: 2px solid blue;
        text-align: center;
        border-radius: 15px;
        padding: 15px;
      }
      h1{
        padding-bottom: 10px;
        border-bottom: 1px solid black;
      }
    </style>
  </head>
  <body>
    <body>
      <form class="formulario" action="controlador.php" method="post">
        <h1>Modificar componente</h1>
        id <br>
        <input type="text" name="idM" value="<?php echo $id ?>">
        <p>Tipo</p>
        <input list="tipos" name="tiposM" value="<?php echo $row['tipo'] ?>">
        <datalist id="tipos">
          <option value="Placa Base">
          <option value="Procesador">
          <option value="Disco Duro">
          <option value="Memoria RAM">
        </datalist>
        <br>
        <p>Modelo</p>
        <input type="text" name="modeloM" value="<?php echo $row['model'] ?>"><br>
        <p>Precio</p>
        <input type="text" name="precioM" value="<?php echo $row['preu'] ?>"><br><br>
        <textarea name="descripcionM" rows="10" cols="50" placeholder="Descripcion..."><?php echo $row['descripcion']?></textarea>
        <br>
        <input type="submit" name="submit" value="Enviar">
        <input type="button" onClick="document.location = 'index.php'" name="Cancelar" value="Cancelar">
      </form>
  </body>
</html>
