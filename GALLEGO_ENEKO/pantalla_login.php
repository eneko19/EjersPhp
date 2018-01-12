<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <style media="screen">
      body{
        text-align: center;
        background-color: #DADADA;
      }
      .Registro{
        margin: auto;
        margin-top: 20px;
        width: 400px;
        height: 250px;
        border: 3px solid blue;
        border-radius: 20px;
        background-color: white;
      }
    </style>
  </head>
  <body>
    <div class="Registro">
    <form class="formLogin" action="controlador.php" method="post">
      <h1>Login</h1>
        <span class="fontawesome-user"><input type="text" name="usuari" required placeholder="Nombre de usuario" autocomplete="off">
          <br><br>
        <span class="fontawesome-lock"><input type="password" name="pass" id="password" required placeholder="Contraseña" autocomplete="off">
          <br><br>
        <input type="submit" name="submitL" value="Login" title="Logea tu cuenta">
        <?php
          // Si recibo por GET un error muestra este parrafo
          if (isset($_GET["error"])) {
              echo "<p id=\"error\" style=\"color: red;\">El usuario y/o la contraseña son incorrectos</p>";
          }
         ?>
         </div>
    </form>
  </body>
</html>
