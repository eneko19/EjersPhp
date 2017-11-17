<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
  </head>
  <body>
    <form action="formularios.php" method="post">
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
     <input type="submit" value="Enviar" name="submit" />

    </form>
  </body>
</html>
