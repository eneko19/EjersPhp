<?php
$id = $_GET["id"];

//Connectar a una Base de dates
$servername = "localhost";
$username = "user";
$password = "user";
$dbname = "bd7";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // variable que guarda la sentencia sql
  $sql = "SELECT titulo, autor, genero, precio from tb_libros where id = $id";

  // Guarda el resultado de la sentencia sql ejecutada en una variable
  $result = $conn->query($sql);

  $row = $result->fetch_assoc();

  session_start();
  if (isset($_SESSION['usuario'])) {
?>
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>Modificar</title>
        <style media="screen">
        body {
          text-align: center;
          background-color: #DADADA;
        }
          .formulario{
            margin: auto;
            margin-top: 50px;
            width: 60%;
            border: 2px solid blue;
            text-align: center;
            border-radius: 15px;
            padding: 15px;
            background-color: white;
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
            <h1>Edicción de libros</h1>
            <input type="text" name="idM" value="<?php echo $id ?>" hidden="hidden" required>
            <p>Titulo</p>
            <input type="text" name="tituloM" value="<?php echo $row['titulo'] ?>" required><br>
            <p>Autor</p>
            <input type="text" name="autorM" value="<?php echo $row['autor'] ?>" required><br>
            <p>Género</p>
            <input list="generoM" name="generoM" value="<?php echo $row['genero'] ?>" required>
            <datalist id="generoM">
              <option value="Infantil">
              <option value="Ficción">
              <option value="Ensayo">
            </datalist>
            <p>Precio</p>
            <input type="text" name="precioM" value="<?php echo $row['precio'] ?>" required><br><br>
            <input type="submit" name="submitM" value="Enviar">
            <input type="button" onClick="document.location = 'index.php'" name="Cancelar" value="Cancelar">
          </form>
      </body>
    </html>

<?php
  }else {
    include('pantalla_login.php');
  }
 ?>
