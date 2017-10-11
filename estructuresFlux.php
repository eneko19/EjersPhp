<?php
echo "<body style=\"text-align:center;\">";
echo "<h2>Condicionales</h2>";
// Ejecicio 1
// http://localhost/practicas/estructuresFlux.php?numMenor=5&numMayor=9
$numMenor = $_GET["numMenor"];
$numMayor = $_GET["numMayor"];
echo "** <b>EJERCICIO 1</b> **<br>";
echo "Los numeros son $numMenor y $numMayor<br>";
if ($numMenor > $numMayor) {
  echo "El número mayor es: $numMenor";
}else if ($numMenor < $numMayor) {
  echo "El número mayor es: $numMayor";
}else {
  echo "Son iguales";
}

// Ejercicio 2
echo "<br> <br>";
$pal = strlen($_GET["pal"]);
$pal2 = strlen($_GET["pal2"]);

echo "** <b>EJERCICIO 2</b> **<br>";
echo "Las palabras son " .  $_GET["pal"] . " y " . $_GET["pal2"] . "<br>";
if ($pal > $pal2) {
  echo "La palabra " . $_GET["pal"] . " es mas larga que " . $_GET["pal2"];
}elseif ($pal < $pal2) {
  echo "La palabra " . $_GET["pal2"] . " es mas larga que " . $_GET["pal"];
}else {
  echo "Las palabras son iguales de longitud";
}

// Ejercicio 3
echo "<br> <br>";
echo "** <b>EJERCICIO 3</b>**<br>";

$var = true;
if (is_int($var)) {
  echo "$var es un int.";
}elseif (is_string($var)) {
  echo "$var es un string.";
}elseif (is_bool($var)) {
  echo "$var es un boolean";
}elseif (is_float($var)) {
  echo "$var es un número real.";
}else {
  echo "No es ninguno de los dos";
}


// Ejercicio 4
echo "<br> <br>";
echo "** <b>EJERCICIO 4</b>**<br>";

$var1 = $_GET["var"];

if (is_int($var1)) {
  echo $_GET["var"] . " es un int.";
}elseif (is_string($var1)) {
  echo $_GET["var"] . " es un string.";
}elseif (is_bool($var1)) {
  echo $_GET["var"] . " es un boolean";
}elseif (is_float($var1)) {
  echo $_GET["var"] . " es un número real.";
}else {
  echo "ERROR";
}

// Ejercicio 5
echo "<br> <br>";
echo "** <b>EJERCICIO 5</b>**<br>";

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];

$codi = $_GET["codi"];

if ($codi == "a") {
  $suma = $num1 + $num2;
  echo "$suma";
}elseif ($codi == "-") {
  $resta = $num1 - $num2;
  echo "$resta";
}elseif ($codi == "*") {
  $multi = $num1 * $num2;
  echo "$multi";
}elseif ($codi == "/") {
  $div = $num1 / $num2;
  echo "$div";
}elseif ($codi == "r") {
  $pow = pow($num1,$num2);
  echo "$pow";
}else {
  echo "FATAL ERROR";
}


// Ejercicio 6
echo "<br> <br>";
echo "** <b>EJERCICIO 6</b>**<br>";

$mes = $_GET["mes"];
// http://localhost/practicas/estructuresFlux.php?mes=5
switch ($mes) {
  case '1':
  echo "Enero";
    break;
  case '2':
  echo "Febrero";
    break;
  case '3':
  echo "Marzo";
    break;
  case '4':
  echo "Abril";
    break;
  case '5':
  echo "Mayo";
    break;
  case '6':
  echo "Junio";
    break;
  case '7':
  echo "Julio";
    break;
  case '8':
  echo "Agosto";
    break;
  case '9':
  echo "Septiembre";
    break;
  case '10':
  echo "Octubre";
    break;
  case '11':
  echo "Noviembre";
    break;
  case '12':
  echo "Diciembre";
    break;
    default:
    echo "ERROR: Número incorrecto";
    break;
}

echo "<h2>Bucles</h2>";

// Ejercicio 1
echo "** <b>EJERCICIO 1</b>**<br>";

$num = $_GET['mult'];
if ($num >= 1 & $num <= 10) {
  for ($i=0; $i <= 10; $i++) {
    echo  $_GET['mult']." x $i = " . ($num*$i) . "<br>";
      }
}else{
    echo "El número debe ser entre 1 y 10.";

}

// Ejercicio 2
echo "<br> <br>";
echo "** <b>EJERCICIO 2</b>**<br>";

// http://localhost/practicas/estructuresFlux.php?n=5

$n = $_GET["n"];
for ($i=0; $i <= $n; $i++) {
  $suma = $i + $suma;
}
echo "$suma";

// Ejercicio 3
echo "<br> <br>";
echo "** <b>EJERCICIO 3</b>**<br>";

$pot = $_GET["pot"];

if ($pot >=1 & $pot <=10) {
  for ($i=1; $i <= 10; $i++) {
    $tot = pow($pot,$i);
      echo "$tot ,";
  }
}else {
  echo "ERROR";
}

// Ejercicio 4
echo "<br> <br>";
echo "** <b>EJERCICIO 4</b>**<br>";

$nu1 = 1;
$nu2 = 2;
































 ?>
