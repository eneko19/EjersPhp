<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Altas</title>
  </head>
  <body>
    <h1>Alta de componente</h1>
    <form class="formulario" action="controlador.php" method="post">
      <p>Tipo</p>
      <input list="tipos" name="tipos">
      <datalist id="tipos" name="tipos">
        <option value="Placa Base">
        <option value="Procesador">
        <option value="Disco Duro">
        <option value="Memoria RAM">
      </datalist>
      <br>
      <p>Modelo</p>
      <input type="text" name="modelo" ><br>
      <p>Precio</p>
      <input type="number" name="precio" value="0"><br><br>
      <textarea name="descripcion" rows="10" cols="50">Descripcion...</textarea>
      <br>
      <input type="submit" name="submit" value="Enviar">
      <input type="button" onClick="document.location = 'index.php'" name="Cancelar" value="Cancelar">
    </form>
  </body>
</html>
