<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div align='center'>
  <table border='1' cellpadding='0' cellspacing='0' width='600' bgcolor='#F6F6F6' bordercolor='#FFFFFF'>
    <tr>
      <td width='150' style='font-weight: bold'>TIPO</td>
      <td width='150' style='font-weight: bold'>MODEL</td>
      <td width='150' style='font-weight: bold'>DESCPRIPCION</td>
      <td width='150' style='font-weight: bold'>PREU</td>
      <td width='150' style='font-weight: bold'></td>
    </tr>

<?php
$servername = "localhost";
$username = "eneko";
$password = "eneko";
$dbname = "ComponentsBD";

$conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "select id, tipo, model, descripcion, preu from components";
$result = $conn->query($sql);
// Executa la Query
if ($result->num_rows > 0) {
// Ara escrivim la informació obtenida per files
  while($row = $result->fetch_assoc()) {
    echo "
        <tr>
          <td width='150'>".$row['tipo']."</td>
          <td width='150'>".$row['model']."</td>
          <td width='150'>".$row['descripcion']."</td>
          <td width='150'>".$row['preu']."</td>
          <td width='150'></td>
        </tr>
        </table>";

  }
  echo "<a href=\"altas.php\"><button type=\"submit\" name=\"add\">Agregar</button></a>";
}else {
 echo "0 results";
}

  $conn->close();
?>
   </table>
</div>

  </body>
</html>
