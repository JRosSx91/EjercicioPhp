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
		<form method="post" action="formulari.php">
			<div id="datos">
				<input type="text" name="nom" placeholder="Nom">
				<input type="text" name="cognom" placeholder="Cognom">
				<input type="text" name="dni" placeholder="DNI">
				<input type="text" name="mail" placeholder="Mail">
			</div>
		
			<div id="partidos">
				<div>
				<p><strong>1&nbsp&nbspX&nbsp&nbsp2</strong></p>
				</div>

				<div>
				<label>Barcelona-Palamós</label>
				<input type="radio" name="par1" value="1">
				<input type="radio" name="par1" value="X">
				<input type="radio" name="par1" value="2">
				</div>

				<div>
				<label>Espanyol-Manresa</label>
				<input type="radio" name="par2" value="1">
				<input type="radio" name="par2" value="X">
				<input type="radio" name="par2" value="2">
				</div>

				<div>
				<label>Nàstic-Llagostera</label>
				<input type="radio" name="par3" value="1">
				<input type="radio" name="par3" value="X">
				<input type="radio" name="par3" value="2">
				</div>

				<div>
				<label>Sant Andreu-Blanes</label>
				<input type="radio" name="par4" value="1">
				<input type="radio" name="par4" value="X">
				<input type="radio" name="par4" value="2">
				</div>

				<div>
				<label>Andorra-Balaguer</label>
				<input type="radio" name="par5" value="1">
				<input type="radio" name="par5" value="X">
				<input type="radio" name="par5" value="2">
				</div>

				<div>
				<label>Lleida-Sant Cristòbal</label>
				<input type="radio" name="par6" value="1">
				<input type="radio" name="par6" value="X">
				<input type="radio" name="par6" value="2">
				</div>

				<div>
				<label>Gramanet-Sabadell</label>
				<input type="radio" name="par7" value="1">
				<input type="radio" name="par7" value="X">
				<input type="radio" name="par7" value="2">
				</div>

				<div>
				<label>Mataró-Hospitalet</label>
				<input type="radio" name="par8" value="1">
				<input type="radio" name="par8" value="X">
				<input type="radio" name="par8" value="2">
				</div>

				<div>
				<label>Manlleu-Girona</label>
				<input type="radio" name="par9" value="1">
				<input type="radio" name="par9" value="X">
				<input type="radio" name="par9" value="2">
				</div>

				<div>
				<label>La Pineda-Granollers</label>
				<input type="radio" name="par10" value="1">
				<input type="radio" name="par10" value="X">
				<input type="radio" name="par10" value="2">
				</div>

				<div>
				<label>Reus-Salou</label>
				<input type="radio" name="par11" value="1">
				<input type="radio" name="par11" value="X">
				<input type="radio" name="par11" value="2">
				</div>

				<div>
				<label>Folgueras-Sarrià</label>
				<input type="radio" name="par12" value="1">
				<input type="radio" name="par12" value="X">
				<input type="radio" name="par12" value="2">
				</div>

				<div>
				<label>Suburense-Roses C.F.A.</label>
				<input type="radio" name="par13" value="1">
				<input type="radio" name="par13" value="X">
				<input type="radio" name="par13" value="2">
				</div>

				<div>
				<label>Vilassar-St. Joan Despí</label>
				<input type="radio" name="par14" value="1">
				<input type="radio" name="par14" value="X">
				<input type="radio" name="par14" value="2">
				</div>
			</div>
			<div id="final">
				<p class="selecciona">Selecciona la quantitat que vols apostar en aquesta Quiniela: </p>
				<select id="apuesta" name="select">
					<option value="1">1€</option>
					<option value="2">2€</option>
					<option value="3">3€</option>
					<option value="4">4€</option>
					<option value="5">5€</option>
					<option value="6">6€</option>
					<option value="7">7€</option>
					<option value="8">8€</option>
					<option value="9">9€</option>
					<option value="10">10€</option>
				</select>
				<div>
					<p class="edat">Sóc major d'edat i accepto les <a href="condiciones.php" target="_blank">condicions d'ús</a></p>
					<input type="checkbox" name="check" value="1">
				</div>
				<div id="boton">
					<input type="submit" name="boto" value="Enviar el resultat">
				</div>
			</div>
		</form>
	</main>
</body>
</html>