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
    <link rel="apple-touch-icon" href="../images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
<div class="contenedor">
	<header class="cabeceraPrincipal">
		<section class="logotipo"><img src="../images/logotipoPet.png"></section>
		<nav class="menuPrincipal">
			<a href="../">Inicio</a>
			<a href="Servicios.php">Servicios</a>
			<a href="#">Productos</a>
			<a href="Adopción.php">Adopción</a>
			<a href="#">Contactos</a>
		</nav>
	</header>
	<main>
		<h2>formulario  de adopccion</h2>
		
        <form method="post" action="">
            <div class="grupoinput">
                <label for="nombres">Nombres</label>
                <input type="text" id = "nombres" placeholder="inserte su nombre" name = "nombres" required="">
            </div>

            <div class="grupoinput">
                <label for="Apellidos">Apellidos</label>
                <input type="text" id = "Apellidos" placeholder="inserte su Apellidos" name = "nombres">
            </div>


            <div class="grupoinput">
                <label for="cedula">cedula</label>
                <input type="text" id = "cedula" placeholder="inserte su cedula" name = "nombres">
            </div>


            <div class="grupoinput">
                <label for="telefono">telefono</label>
                <input type="text" id = "telefono" placeholder="inserte su telefono" name = "nombres">
            </div>


            <div class="grupoinput">
                <label for="Direccion">Direccion</label>
                <input type="text" id = "Direccion" placeholder="inserte su Direccion" name = "nombres">
            </div>


            <div class="grupoinput">
                <label for="fecha">fecha nacimiento</label>
                <input type="text" id = "fecha" placeholder="inserte su fecha de nacimiento" name = "nombres">
            </div>


            <div class="grupoinput">
                <label for="Correo">Correo</label>
                <input type="text" id = "Correo" placeholder="inserte su Correo" name = "nombres">
            </div>
            <button type="sublimet"class="button">enviar datos</button>



        </form>
















			
			

	
	</main>
	<section class="sponsor">
		<h3 class="colorAzul">Sponsor</h3>
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