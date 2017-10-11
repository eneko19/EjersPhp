<?php
echo "<body style=\"text-align:center;\">";
// Ejercicio 1
echo "** <b>EJERCICIO 1</b>**<br>";

if (!isset($_POST["submit"])) {
  die();
}
/*if (!isset($_POST["nombre"])) {
  die();
}*/

echo "<br>
      <table>
        <tr>
          <th>Nombre:</th>
          <td>" . $_POST['nombre'] . "</td>
        </tr>
        <tr>
          <th>LLinatge:</th>
          <td>" . $_POST['edad'] . "</td>
        </tr>
        <tr>
          <th>Correo:</th>
          <td>" . $_POST['email'] . "</td>
        </tr>
      </table>";

 ?>
