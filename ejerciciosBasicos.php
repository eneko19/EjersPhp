<?php

// Ejercicio 1
echo "Hola món";

// Ejercicio 2
// phpinfo();

// Ejercicio 3

echo "<br><b>Hola món</b>";
echo "<br><i>Hola món</i>";
echo "<br><h1>Hola món</h1>";
echo "<br><h2>Hola món</h2>";
echo "<br><h3>Hola món</h3>";
echo "<br><h4>Hola món</h4>";
echo "<br><h5>Hola món</h5>";

// Ejercicio 4
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$resultado = $num1+$num2;
echo "El resultado es " . $resultado;

// Ejercicio 5
$palabra1 = $_GET["palabra1"];
$palabra2 = $_GET["palabra2"];

echo "<br>Les paraules són  $palabra1 i  $palabra2.";

// Ejercicio 6
$nom = $_GET["nom"];
$ape = $_GET["apellido"];
$edad = $_GET["edad"];

echo $nom;
echo "<br>
      <table>
        <tr>
          <th>Nom:</th>
          <td>$nom</td>
        </tr>
        <tr>
          <th>LLinatge:</th>
          <td>$ape</td>
        </tr>
        <tr>
          <th>Edat:</th>
          <td>$edad</td>
        </tr>
      </table>";
// Ejercicio 7
$int = 5;
$real = 6.6;
$boolean = true;
$string = "Eneko";
$array = array(1,2,3);

var_dump("Valores: $int  $real  $boolean  $string  $array");

echo "<br>";
$nodeclarada;
// Sale NULL
var_dump($nodeclarada);

 ?>
