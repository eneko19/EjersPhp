
<?php
	//inicialitzar les variables
	$nom = $llinatge = $dni = $telefon = $email = $data = $sexe = $coneixements = $expLab = "";
	$nomErr = $llinatgeErr = $dniErr = $dniErro = $telefonErr = $emailErr = "";
	$numSel = "";
	$comprobarEmail = "";
	$mostrar = $mostrar2 = $mostrar3 = $mostrar4 = $mostrar5 = false;

 //
	if ( isset ( $_POST["expLab"] ) )
			$expLab = $_POST["expLab"];
	if ( isset ( $_POST["sexe"] ) )
			$sexe= $_POST["sexe"];
	if ( isset ( $_POST["data"] ) )
			$data = $_POST["data"];
	if ( isset ( $_POST["email"] ) )
			$email = $_POST["email"];

// Si no has insertado nada estará vacio si no está vacio
// ejecuta el comentario
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

 	// Función para ver si la variable esta vacía
		if (empty($_POST["nom"])) {
			$mostrar = false;
			$nomErr = "*";
		} else {
			$nom = test_input($_POST["nom"]);
			$nomErr = "";
			$mostrar = true;
		}

		if (empty($_POST["llinatge"])) {
			$mostrar2 = false;
			$llinatgeErr = "*";
		} else {
			$llinatge = test_input($_POST["llinatge"]);
			$llinatgeErr = "";
			$mostrar2 = true;
		}
		if (isset ($_POST["dni"])) {
			$dni = $_POST["dni"];
			$dniNum = strlen($dni);
			$dniLetra = substr($dni, -1);
			$dniNumeros = substr($dni, 0, 8);
			if ($dni == "") {
				$dniErr = "*";
			}
			elseif (!is_numeric($dniNumeros) || is_numeric($dniLetra) || $dniNum !== 9  || !(ctype_alpha($dniLetra))) {
				$dniErr = "**";
			}else {
				$mostrar5 = true;
			}

		}
		if (empty($_POST["telefon"])) {
			$mostrar3 = false;
			$telefonErr = "*";
		} else {
			$telefon = test_input($_POST["telefon"]);
			$telefonErr = "";
			$mostrar3 = true;
		}

		if (empty($_POST["email"])) {
				$mostrar4 = false;
				$emailErr = "*";
		} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "**";
		}else {
				$mostrar4 = true;
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

				// Si cualquier boolean es false se muestra el div errores
				if (!$mostrar || !$mostrar2 || !$mostrar3 || !$mostrar4 || !$mostrar5 ) {
						echo "<style> .errores{display:block}</style>";
				}
	}
	// Si todos los booleans son true muestra la información
	if ($mostrar && $mostrar2 && $mostrar3 && $mostrar4 && $mostrar5) {
		?>
		<div class="tablai">
			<h1>Tabla de informació</h1>
		</div>
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

		<div class="tab-content">
			<h1>Formulari</h1>
	  <form action="formulario.php" method="post">

			<div class="errores">
				<span class="aster">*	Camp Obligatori</span>
				<span class="aster">**	Format incorrecte</span>
			</div>

			<div class="top-row">

			<div class="field-wrap">
				<input type="text" name="nom" placeholder="Nom<?php echo $nomErr ?>"><br>
			</div>

    	<div class="field-wrap">
				<input type="text" name="llinatge" placeholder="Llinatge<?php echo $llinatgeErr ?>"><br>
    	</div>

			<div class="field-wrap">
				<input type="text" name="dni" placeholder="DNI<?php echo $dniErr ?>"><br>
			</div>

			<div class="field-wrap">
				<input type="text" name="telefon" placeholder="Teléfon<?php echo $telefonErr ?>"><br>
			</div>

			<div class="field-email">
				<input type="text" name="email" placeholder="E-mail<?php echo $emailErr ?>"><br>
			</div>
			</div>
		</div>
				<div class="cont2">
					<div class="data">
						<p>Data de naixement:</p>
						<input type="date" name="data"><br><br>
					</div>
					<div class="radio">
						<p>Sexe:</p>
						<input type="radio" name="sexe" value="Home" checked>Home<br>
						<input type="radio" name="sexe" value="Dona">Dona<br>
						<input type="radio" name="sexe" value="Altre">Altre<br>
					</div>
				</div>
					<div class="conocimientos">
						<p>Coneixements:</p>
						<input type="checkbox" name="coneixements[]" value="java">Java
						<input type="checkbox" name="coneixements[]" value="html5">HTML5
						<input type="checkbox" name="coneixements[]" value="javascript">Javascript
						<input type="checkbox" name="coneixements[]" value="php">PHP
						<input type="checkbox" name="coneixements[]" value="xml">XML
						<input type="checkbox" name="coneixements[]" value=".net">.NET<br><br>
					</div>

					<div class="expLaboral">
						<span>Experiència Laboral:</span>
						<select name="expLab">
							<option >Sense experiència</option>
							<option >< 1 any</option>
							<option >< 2 anys</option>
							<option >>2 anys</option>
						</select><br><br>
	</div>
	<div class="tab-group">
		<input type="reset" value="Borrar">
		<input type="submit" name="submit" value="Enviar">
	</div>


  <?php } ?>
			</div>

  </body>
  </html>
