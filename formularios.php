<?php

// Ejercicio 1
echo "** <b>EJERCICIO 1</b>**<br>";

if (!isset($_POST["submit"])) {
  die();
}


echo "<br>
      <table>
        <tr>
          <th>Nombre:</th>
          <td>" . $_POST['nombre'] . "</td>
        </tr>
        <tr>
          <th>Edad:</th>
          <td>" . $_POST['edad'] . "</td>
        </tr>
        <tr>
          <th>Correo:</th>
          <td>" . $_POST['email'] . "</td>
        </tr>
      </table><br>";

if ($_POST["gender"] == "hombre") {
  echo "<b>Género:</b> hombre";
}elseif ($_POST["gender"] == "mujer") {
  echo "<b>Género:</b> mujer";
}else {
  echo "<b>Género:</b> Otro";
}

$aficiones=$_POST["aficiones"];

  echo "<br><b>Aficiones: </b>";
  /* Con for:
   for ($i=0;$i<count($aficiones);$i++)
   {
   echo "$aficiones[$i] ";
 }*/
   foreach($_POST['aficiones'] as $aficiones)
{
echo  $aficiones . " ";
}
 ?>
