<?php
// Me conecto a la base de datos
$servername = "localhost";
$username = "user";
$password = "user";
$dbname = "bd7";

$conn = new mysqli($servername, $username, $password, $dbname);
  // Si la session está inciciada muestra el listado
  session_start();
  if (isset($_SESSION['usuario'])) {

      // Muestra el saludo del cliente
      echo "<p style=\"text-align:right;margin-right:70px;margin-left:70px;background-color:#DADADA\">Hola, ". $_SESSION['usuario']."</p>";

    // variable que guarda la sentencia sql para mostrar los datos de la tabla components
      $sql = "select * from tb_libros";

    // Guarda el resultado de la sentencia sql ejecutada en una variable
      $result = $conn->query($sql);

      // Mientras que el resultado tenga mas de 0 lineas se mostrarán los siguientes datos
        if ($result->num_rows > 0) {
          echo "
              <h1 style=\"text-align:center\">Libreria</h1>
              <div align='center'>
              <a href=\"controlador.php?logout\"><button type=\"submit\" name=\"logout\">Logout</button></a>
            <table border='1' cellpadding='0' cellspacing='0' width=\"800\">
              <tr>
                <td width='150' style='font-weight: bold'>Título</td>
                <td width='150' style='font-weight: bold'>Autor</td>
                <td width='150' style='font-weight: bold'>Género</td>
                <td width='150' style='font-weight: bold'>Precio</td>
                <td width='150' style='font-weight: bold'>Borrar</td>
                <td width='150' style='font-weight: bold'>Editar</td>
              </tr>";
          // Muestra los datos de salida de cada $row (fila)
          while($row = $result->fetch_assoc()) {
            echo "
                <tr>
                  <td width='150'>".$row['titulo']."</td>
                  <td width='150'>".$row['autor']."</td>
                  <td width='300'>".$row['genero']."</td>
                  <td width='100'>".$row['precio']."€</td>
                  <td width='90'><a onClick=\"javascript: return confirm('¿Deseas eliminar este registro?');\"
                    href=\"controlador.php?id={$row['id']}\">Borrar</a></td>
                  <td width='90'><a onClick=\"javascript: return confirm('¿Deseas modificar este registro?');\"
                    href=\"modificar.php?id={$row['id']}\">Editar</a></td>
                </tr>
                ";

          }
              echo "</table>";
              echo "<a href=\"altas.php\"><button type=\"submit\" name=\"add\">Nuevo</button></a>";
        // Si no, solo muestra las cabeceras y los botones
        }else {
          echo "
              <h1 style=\"text-align:center\">Libreria</h1>
              <a href=\"controlador.php?logout\"><button type=\"submit\" name=\"logout\">Logout</button></a>
              <div align='center'>
              <table border='1' cellpadding='0' cellspacing='0' width=\"800\">
                <tr>
                  <td width='150' style='font-weight: bold'>Título</td>
                  <td width='150' style='font-weight: bold'>Autor</td>
                  <td width='150' style='font-weight: bold'>Género</td>
                  <td width='150' style='font-weight: bold'>Precio</td>
                </tr>";
              echo "</table>";
              echo "<a href=\"altas.php\"><button type=\"submit\" name=\"add\">Nuevo</button></a>";
            }
    // Si no incluye el código de la pantalla login
    } else {
      include('pantalla_login.php');
    }

  // Cierra la conexión
  $conn->close();
 ?>
