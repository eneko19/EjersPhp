
<?php
	//inicialitzar les variables
	$nom = $llinatge = $dni = $telefon = $email = $data = $sexe = $coneixements = $expLab = "";
	$nomErr = $llinatgeErr = $dniErr = $telefonErr = $emailErr = "";
	$numSel = "";
	$mostrar = false;

	if ( isset ( $_POST["expLab"] ) )
			$expLab = $_POST["expLab"];
	if ( isset ( $_POST["sexe"] ) )
			$sexe= $_POST["sexe"];
	if ( isset ( $_POST["data"] ) )
			$data = $_POST["data"];

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

?>

<html>
<head>
	<link rel="stylesheet" href="css.css">
</head>
<body>
	<?php
	//Si ha estat processat el formulari, mostro els resultats
	if (isset( $_POST['submit'] ) ) {

		if (empty($_POST["nom"])) {
			$mostrar = false;
			$nomErr = "*";
		} else {
			$nom = test_input($_POST["nom"]);
			$nomErr = "";
			$mostrar = true;
		}

		if (empty($_POST["llinatge"])) {
			$mostrar = false;
			$llinatgeErr = "*";
		} else {
			$llinatge = test_input($_POST["llinatge"]);
			$llinatgeErr = "";
			$mostrar = true;
		}
		if (isset ($_POST["dni"])) {
			$dni = $_POST["dni"];
			$dniNum = strlen($dni);
			$dniLetra = substr($dni, -1);
			$dniNumeros = substr($dni, 0, 8);
			if ($dni == "") {
				$dniErr = "*";
			}
			elseif (!is_numeric($dniNumeros) || is_numeric($dniLetra) || $dniNum !== 9  ) {
				$dniErr = "El DNI introducido no es válido";
			}

		}
		if (empty($_POST["telefon"])) {
			$mostrar = false;
			$telefonErr = "*";
		} else {
			$telefon = test_input($_POST["telefon"]);
			$telefonErr = "";
			$mostrar = true;
		}
		if (empty($_POST["email"])) {
			$mostrar = false;
			$emailErr = "*";
		}else {
			$email = test_input($_POST["email"]);
			$emailErr = "";
			$mostrar = true;
		}

		if (isset ($_POST["coneixements"])) {
							$sel = $_POST['coneixements'];
							$contar = count($sel);
							$numSel = false;

							if ($contar == 0) {
								$numSel = false;
							} else {
								$numSel = true;
							}
						}
	}

	if ($mostrar) {
		?>
		<table border="2" cellspacing="0" cellpadding="2" >
		 <tr>
			 <th>Nom: </th>
			 <td><?php echo $nom ?></td>
			 <th>Llinatges: </th>
			 <td colspan="3"><?php echo $llinatge ?></td>
		 </tr>
		 <tr>
			 <th>DNI: </th>
			 <td><?php echo $dni ?></td>
			 <th>Sexe: </th>
			 <td><?php echo $sexe ?></td>
			 <th>Data de naixement: </th>
			 <td><?php echo $data ?> </td>
		 </tr>
		 <tr>
			 <th>Teléfon: </th>
			 <td><?php echo $telefon ?></td>
			 <th>Email: </th>
			 <td colspan="3"><?php echo $email ?></td>
		 </tr>
		 <tr>
			 <th>Experiència Laboral: </th>
			 <td colspan="5"><?php echo $expLab ?></td>
		 </tr>
		 <tr>
			 <th>Coneixements: </th>
			 <td colspan="5"><?php if ($numSel == 0) {
			 	echo "Sense coneixements";
			}else {
				foreach($_POST['coneixements'] as $coneixements){
					echo  $coneixements . ", "; }
			}

			  ?></td>
		 </tr>
	 </table>

	<?php  } else { ?>
		<style media="screen">
			th{
				background-color: grey;
			}
		</style>
		<div class="form">

	  <form action="formulario.php" method="post">
	  Nom :              <input type="text"   name="nom"><?php echo $nomErr ?><br>
    Llinatge:          <input type="text" name="llinatge"><?php echo $llinatgeErr ?><br>
    DNI:               <input type="text" name="dni"><?php echo $dniErr ?><br>
    Teléfon:           <input type="text" name="telefon"><?php echo $telefonErr ?><br>
	  E-mail:            <input type="text" name="email"><?php echo $emailErr ?><br>
    Data de naixement: <input type="date" name="data"><br><br>
    Sexe: <br>
    <input type="radio" name="sexe" value="Home" checked> Home<br>
    <input type="radio" name="sexe" value="Dona"> Dona<br>
    <input type="radio" name="sexe" value="Altre"> Altre<br><br>

    Conocimientos: <br>
    <input type="checkbox" name="coneixements[]" value="java">Java
    <input type="checkbox" name="coneixements[]" value="html5">HTML5
    <input type="checkbox" name="coneixements[]" value="javascript">Javascript
    <input type="checkbox" name="coneixements[]" value="php">PHP
    <input type="checkbox" name="coneixements[]" value="xml">XML
    <input type="checkbox" name="coneixements[]" value=".net">.NET<br><br>

    Experiència Laboral:
    <select name="expLab">
      <option >Sense experiència</option>
      <option >< 1 any</option>
      <option >< 2 anys</option>
      <option >>2 anys</option>
    </select><br><br>

    <input type="submit" name="submit" value="Enviar">
  <?php } ?>
			</div>

  </body>
  </html>
