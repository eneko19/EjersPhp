!<!DOCTYPE html>
<html>

<head>
</head>
<body>

<?php
if (isset($_POST['submit']){

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

 foreach($_POST['aficiones'] as $aficiones){
  echo  $aficiones . " ";
  }

}else {
?>
  <form action="form.php" method="post">
   <p>Su nombre: <input type="text" name="nombre" /></p>
   <p>Su edad: <input type="text" name="edad" /></p>
   <p>Correo: <input type="text" name="email"></p> <br>

   <p>Género:</p>
   <p><input type="radio" name="gender" value="hombre" checked>Hombre</p>
   <p><input type="radio" name="gender" value="mujer">Mujer</p>
   <p><input type="radio" name="gender" value="otro"> Otro</p> <br>

   <p>Aficiones:</p>
   <input type="checkbox" name="aficiones[]" value="musica">Música
   <input type="checkbox" name="aficiones[]" value="futbol">Fútbol
   <input type="checkbox" name="aficiones[]" value="cine">Cine
   <input type="checkbox" name="aficiones[]" value="videojuegos">VideoJuegos
   <input type="checkbox" name="aficiones[]" value="estudiar">Estudiar <br><br>

   <input type="submit" value="Enviar" name="submit">
  </form>
<?php } ?>

  </body>
</html>
