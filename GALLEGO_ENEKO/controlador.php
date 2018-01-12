<?php
//Connectar a una Base de dates
$servername = "localhost";
$username = "user";
$password = "user";
$dbname = "bd7";
// Creamos una conecexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Funcion para limpiar el código
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

/* LOGIN */
  if (isset($_POST["submitL"])) {
    // Guardamos los post en variables
    $usuarioL = test_input($_POST["usuari"]);
    $passL = test_input($_POST["pass"]);

    // Guardamos la sequencia en una variable
    $login = "select * from tb_usuarios where usuario like '$usuarioL' and password like '$passL'";

    $result = $conn->query($login);

      // Si $result tiene mas de un resultado
      if ($result->num_rows > 0) {
        // inicio la sesion
        session_start();
        $_SESSION['usuario'] = $usuarioL;
        header('location: index.php');
      }else {
        // Si no vuelve a pantalla_login y enviar un error por GET
        include("pantalla_login.php");
        header('location: index.php?error=si');
      }

    }else {
      echo "ERROR";
    }
  /* LOGOUT*/
    if (isset($_GET["logout"])) {
      session_start();
      // Borra contingut de $_SESSION
      session_unset();
      // elimina la sessio
      session_destroy();
      // volvemos a index.php
      header('location: index.php');
    }

/* BORRAR */
  if(isset ($_GET["id"])){
     // Guardamos el GET en una variable
     $id=test_input($_GET["id"]);
     // Guardamos la sequencia de borrar en una variable
     $sql = "DELETE FROM tb_libros WHERE id ='$id'";

       // Si se crea la conexión va hacia index.php
       if ($conn->query($sql) === TRUE) {
           header('Location: index.php');
       }else {
           echo "<br>Error:" . $conn->error;
       }
   }

/*  ALTA */
  // Limpiamos el codigo
  if (isset($_POST["submitA"])) {
    // Guardamos los POST en variables
    $titulo = test_input($_POST["titulo"]);
    $autor = test_input($_POST["autor"]);
    $genero = test_input($_POST["genero"]);
    $precio = test_input($_POST["precio"]);

  // variable que guarda la sentencia para insertar los datos
    $consulta = "INSERT INTO tb_libros (titulo, autor, genero, precio) VALUES
     ('$titulo', '$autor', '$genero', '$precio')";

    // Si se hace correctamente pasa al archivo index.php si no escribe un error
       if ($conn->query($consulta) === TRUE) {
          header('location: index.php');
       }else {
         echo "ERROR";
       }
  }
  /* EDICCION */
    if (isset($_POST["submitM"])) {
      // Guardamos los POST en variables
      $idM = test_input($_POST["idM"]);
      $tituloM = test_input($_POST["tituloM"]);
      $autorM = test_input($_POST["autorM"]);
      $generoM = test_input($_POST["generoM"]);
      $precioM = test_input($_POST["precioM"]);

      // variable que guarda la sentencia para modificar los datos
      $modificar = "UPDATE tb_libros set titulo='$tituloM', autor='$autorM', genero='$generoM',
                    precio='$precioM' where id = '$idM'";

        // Si se hace correctamente pasa al archivo index.php si no escribe un error
        if ($conn->query($modificar) === TRUE) {
            header('location: index.php');
        }else {
          echo "ERROR";
        }
    }
 ?>
