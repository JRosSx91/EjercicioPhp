<!DOCTYPE html>
<html>
<head>
	<title>Travessa Online</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/estils.css">
</head>
<body>
	<header>
		<div id="cap">
			<img src="imatges/quinielahorizontal.jpg" alt="logo quiniela">
		</div>
	</header>
	<main>
		<div id="resultado">
			<?php
				$nom = $_POST['nom'];
				$cognom = $_POST['cognom'];
				$dni = $_POST['dni'];
				$mail = $_POST['mail'];

				$partido1 = $_POST['par1'];
				$partido2 = $_POST['par2'];
				$partido3 = $_POST['par3'];
				$partido4 = $_POST['par4'];
				$partido5 = $_POST['par5'];
				$partido6 = $_POST['par6'];
				$partido7 = $_POST['par7'];
				$partido8 = $_POST['par8'];
				$partido9 = $_POST['par9'];
				$partido10 = $_POST['par10'];
				$partido11 = $_POST['par11'];
				$partido12 = $_POST['par12'];
				$partido13 = $_POST['par13'];
				$partido14 = $_POST['par14'];

				$select = $_POST['select'];
				$majorEdat = $_POST['check'];
				$boto = $_POST['boto'];

				if(isset($boto)){
					
					//Primera comprobación
					if($majorEdat != 1){
						echo "Heu de ser major d'edat per fer una quiniela.<br><a href='index.php'>Torna enrere</a>";
					}

					//Segunda comprobación
					else if(!$partido1 || !$partido2 || !$partido3 || !$partido4 || !$partido5 || !$partido6 || !$partido7 || !$partido8 || !$partido9 || !$partido10 || !$partido11 || !$partido12 || !$partido13 || !$partido14){
						echo "Heu de seleccionar tots els camps.<br><a href='index.php'>Torna enrere</a>";
					}

					//Tercera comprobación
					else if ($nom == "" || $cognom == "" || $dni == "" || $mail == ""){
						echo "Heu d'indicar el nom, cognom, mail y dni.<br><a href='index.php'>Torna enrere</a>";
					}

					//Si no hay errores
					else{
						echo "<strong>Hola $nom $cognom ($dni).</strong><br><br>Has fet una aposta de <strong>".$select."€</strong> pel següent resultat:<br><br>
						<div class='resultado2'>
						Barcelona-Palamós: ".$partido1."<br>
						Espanyol-Manresa: ".$partido2."<br>
						Nàstic-Llagostera: ".$partido3."<br>
						Sant Andreu-Blanes: ".$partido4."<br>
						Andorra-Balaguer: ".$partido5."<br>
						Lleida-Sant Cristòbal: ".$partido6."<br>
						Gramanet-Sabadell: ".$partido7."<br>
						Mataró-Hospitalet: ".$partido8."<br>
						Manlleu-Girona: ".$partido9."<br>
						La Pineda-Granollers: ".$partido10."<br>
						Reus-Salou: ".$partido11."<br>
						Folgueras-Sarrià: ".$partido12."<br>
						Suburense-Roses C.F.A.: ".$partido13."<br>
						Vilassar-St. Joan Despí: ".$partido14."<br>
						</div><br><br>
						El resultat et serà comunicat a <strong>$mail</strong> d'aquí una setmana.<br><br><h2>Molta sort!</h2>";
					}
				}
			?>
		</div>
	</main>
</body>
</html>