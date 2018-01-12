<?php
session_start();
if (isset($_SESSION['usuario'])) {
?>
<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Altas</title>
   <style media="screen">
   body{
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
   <form class="formulario" action="controlador.php" method="post">
     <h1>Alta de libros</h1>
     <p>Titulo</p>
     <input type="text" name="titulo" required><br>
     <p>Autor</p>
     <input type="text" name="autor" required><br>
     <p>Género</p>
     <input list="genero" name="genero" required>
     <datalist id="genero">
       <option value="Infantil">
       <option value="Ficción">
       <option value="Ensayo">
     </datalist>
     <p>Precio</p>
     <input type="text" name="precio" value="0" required><br><br>
     <input type="submit" name="submitA" value="Enviar">
     <input type="button" onClick="document.location = 'index.php'" name="Cancelar" value="Cancelar">
   </form>
 </body>
</html>

<?php
}else {
  include('pantalla_login.php');
}
 ?>
