<?php include '../rutas.php'; ?> 

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Ports</title>
		<link rel="stylesheet" href="../styles/style.css">
	</head>
	<body>
		
	</body>
		<header class="fondoNegroSuave">
			<h1 class="letraAmarilla dropSombraBlanca">Ports</h1>
		</header>
		<nav class="navDesplegable fondoAmarillo dropSombraNegra">
			<ul class="menu">
				<li>
					<h1 class="nav1 menuIcon" onclick="location.href='<?php echo iniciol ?>'"></h1>
				</li>
				<li>
					<h1 class="nav1 textoSerio">Lenguajes</h1>
					<ul class="submenu">
						<?php foreach ($lenguajesr as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraAmarillaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				
				</li>
				<li>
					<h1 class="nav1 textoSerio">Bitácora</h1>
					<ul class="submenu">
						<?php foreach ($bitacorar as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraAmarillaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li>
					<h1 class="nav1 textoSerio">Hardware</h1>
					<ul class="submenu">
						<?php foreach ($hardwarer as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraAmarillaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li>
					<h1 class="nav1 textoSerio">Hacking</h1>
					<ul class="submenu">
						<?php foreach ($hacking as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraAmarillaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon smallIcons" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li>
					<h1 class="nav1 textoSerio" onclick="location.href='<?php echo nosotrosl ?>'">Acerca de</h1>
				</li>
			</ul>
		</nav>
		<main>
			<div class="textoCentrado">
				<h1 class="margen2 textoSerio letraAmarilla tamanioGran subrayado">Puertos y protocolos</h1>
				<div class="textoCentrado margen2">
		          	<b class="letraBlanca tamanioMed">FTP (20, 21) -></b><b class="textoSerio letraNaranja tamaniopeq"> Protocolo de Transferencia de Archivos</b>
		          	<br><b class="letraCeleste tamaniopeq">(FTP opera en un modelo cliente-servidor, donde un cliente se conecta a un servidor para enviar o recibir archivos)</b>
		        </div>

		        <div class="textoCentrado margen2">
		          	<b class="letraBlanca tamanioMed">SSH (22) -></b><b class="textoSerio letraNaranja tamaniopeq"> Secure Shell</b>
		          	<br><b class="letraCeleste tamaniopeq">(SSH utiliza técnicas de cifrado para proteger la integridad y confidencialidad de los datos transmitidos a través de la red. Simétrico, asimétrico con autenticación de claves e integridad de datos con hash SHA-256)</b>
		        </div>

		        <div class="textoCentrado margen2">
		          	<b class="letraBlanca tamanioMed">SMB (139, 137, 445) -></b><b class="textoSerio letraNaranja tamaniopeq"> Bloque de Mensajes del Servidor</b>
		          	<br><b class="letraCeleste tamaniopeq">(Incluye características como el cifrado de datos, la detección y corrección de errores, y mejoras en la eficiencia de la transferencia de archivos)</b>
		        </div>
		        <div class="textoCentrado margen2">
		          	<b class="letraBlanca tamanioMed">DNS (53) -></b><b class="textoSerio letraNaranja tamaniopeq"> Sistema de Nombres de Dominio</b><br>
		          	<br><b class="letraCeleste tamaniopeq">(El DNS ha sido objeto de preocupaciones de seguridad, incluido el envenenamiento de caché (cache poisoning) y ataques de suplantación de identidad (DNS spoofing). Se han implementado extensiones como DNSSEC (DNS Security Extensions) para abordar algunas de estas preocupaciones)</b>
		        </div class="textoCentrado margen2">
		          	<b class="letraBlanca tamanioMed">HTTP/HTTPS (443, 80, 8080, 8443) -><b class="textoSerio letraNaranja tamaniopeq"> Protocolo de Transferencia de Hipertexto/Seguro</b>
		          	<br><b class="letraCeleste tamaniopeq">(HTTP utiliza el puerto 80 de manera predeterminada para la comunicación sin cifrar)</b>
		        </div class="textoCentrado margen2">

		        <div class="textoCentrado margen2">
		          	<b class="letraBlanca tamanioMed">Telnet (23) -><b class="textoSerio letraNaranja tamaniopeq"> teletype network</b>
		          	<br><b class="letraCeleste tamaniopeq">(Es importante señalar que Telnet no cifra los datos transmitidos, lo que significa que la información, incluyendo nombres de usuario y contraseñas, se envía en texto claro)</b>
		        </div>
		        <div class="textoCentrado margen2">
		          	<b class="letraBlanca tamanioMed">SMTP (25) -><b class="textoSerio letraNaranja tamaniopeq"> Protocolo Simple de Transferencia de Correo</b>
		          	<br><b class="letraCeleste tamaniopeq">(La comunicación SMTP en el puerto 25 es típicamente no cifrada. Esto significa que la información, incluidos los datos del correo electrónico y las credenciales, se transmite en texto claro, lo que puede ser un riesgo de seguridad)</b>
		        </div>
		        <div class="textoCentrado margen2">
		          	<b class="letraBlanca tamanioMed">TFTP (69) -><b class="textoSerio letraNaranja tamaniopeq"> Protocolo de Transferencia de Archivos Trivial</b>
		          	<br><b class="letraCeleste tamaniopeq">(TFTP no proporciona mecanismos sólidos de autenticación ni cifrado de datos. Esto lo hace adecuado para situaciones donde la simplicidad es más importante que la seguridad. Sin embargo, esta falta de seguridad también lo hace vulnerable a ataques, por lo que su uso se limita a entornos de confianza)</b>
		        </div>

		        <h1 class="textoSerio tamanioGran letraAmarilla dropSombraBlanca margen2">Comandos para escuchar puertos</h1>
		        <div class="margen2">
		          	<b class="letraBlanca tamanioMed">Escuchar los puertos abiertos -> </b><b class="textoformal letraNaranja tamaniopeq">sudo lsof -i -P -n | grep LISTEN</b>
		        </div>
		    </div>
		</main>
		<footer class="fondoNegro textoSerio letraBlanca tamaniopeq dropSombraBlanca">
      		<p class="tamaniopeq letraAmarilla sombraNegra">©Copyright 2023 Favio Joel Zalazar. Todos los derechos reservados.</p><button class="botonAmarillo dropSombraBlancaHover" onclick="location.href='<?php $ruta23 ?>'">Subir</button>
    	</footer>
	</body>
</HTML>