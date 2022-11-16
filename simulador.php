<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Happy Pets</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="icon" href="../images/logo.png" sizes="32x32" />
    <link rel="icon" href="../images/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
<div class="contenedor">

	<header class="cabeceraPrincipal">
		<section class="logotipo"><img src="../images/logotipoPet1.png"></section>

		<nav class="menuPrincipal">
			<a href="../index.php">INICIO</a>
			<a href="#">PROYECTO</a>
			<a href="#">DONACIÓN</a>
			<a href="../adopcion.php">ADOPTA</a>
			<a href="simulador.php">SIMULADOR</a>
			<a href="#" class="busqueda"><i class="fa-solid fa-magnifying-glass"></i></a>
			<a href="#"></a>
		</nav>

	</header>

	<main>

		<h2>Calcula el IMC de tu mascota</h2>

		<form method="post" action="procesas.php">
			<div class="grupoInput">
				<label for="nombre">Nombre<span class="alerta">*</span></label>
				<input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" required>
			</div>

			<div class="grupoInput">
				<label for="tipo">Tipo de calculo<span class="alerta">*</span></label>
				<select name="tipo" id="tipo">
					<option value="0" selected disabled hidden>Seleccione el tipo de calculo</option>
					<option value="1" >IMC</option>
					<option value="2">Grasa Corporal en Machos</option>
					<option value="3">Grasa Corporal en Hembras</option>
				</select>
			</div>


			<div class="grupoInput">
				<label for="hsh">Altura Hombro<span class="alerta">*</span></label>
				<input type="number" name="hsh" id="hsh" placeholder="Ingrese la altura del hombro">
			</div>


			<div class="grupoInput">
				<label for="ot">Distancia Occipucio<span class="alerta">*</span></label>
				<input type="number" name="ot" id="ot" placeholder="Ingrese la distancia occipucio a la base de la cola" required>
			</div>


			<div class="grupoInput">
				<label for="cp">Circunferencia<span class="alerta">*</span></label>
				<input type="number" name="cp" id="cp" placeholder="Ingrese la circunferencia pelvica (cm)">
			</div>


			<div class="grupoInput">
				<label for="hs">HS<span class="alerta">*</span></label>
				<input type="number" name="hs" id="hs" placeholder="Ingrese el HS">
			</div>


			<div class="grupoInput">
				<label for="pc">Peso Corporal<span class="alerta">*</span></label>
				<input type="number" name="pc" id="pc" placeholder="Ingrese el peso corporal(Kg)">
			</div>


			<div class="centrado">
				<button class="boton" type="submit">Calcular</button>
			</div>	


		</form>
	</main>

	<section class="sponsor">

		<img src="../images/logotipoPet.png" class="logopet">
		<img src="../images/logo_blanco_utpl.png" class="logou">
	</section>

	<footer class="piePagina">

		<section class="derechos">
			<h6>Derechos Reservados UTPL 2022</h6>
		</section>


		<nav class="redesSociales">
			<a href=""><i class="fa-brands fa-facebook"></i></a>
			<a href=""><i class="fa-brands fa-instagram"></i></a>
			<a href=""><i class="fa-brands fa-tiktok"></i></a>
		</nav>

	</footer>
</div>
</body>
</html>