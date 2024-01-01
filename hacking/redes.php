<?php include '../rutas.php'; ?> 

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Redes</title>
		<link rel="stylesheet" href="../styles/style.css">
	</head>
	<body>
		
	</body>
		<header>
			<h1>Redes</h1>
		</header>
		<nav class="navDesplegable fondoBlanco">
			<ul class="menu">
				<li>
					<h1 class="nav1 menuIcon" onclick="location.href='<?php echo iniciol ?>'"></h1>
				</li>
				<li>
					<h1 class="nav1 textoSerio">Lenguajes</h1>
					<ul class="submenu">
						<?php foreach ($lenguajesr as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraEpicaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
								<h1 class="textoSerio letraEpicaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
								<h1 class="textoSerio letraEpicaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
								<h1 class="textoSerio letraEpicaHover" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon smallIcons" 	src="../icons/<?php echo strtolower($nombre) ?>.png">
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
			<h2>Información sobre redes</h2>
			<p>
				<b class="epico">Entiendase [012 345 67 89 xx] como los componentes de la interfaz de red</b><br><br>
	          	<br><b class="blanco">012 -></b><b> indica que es una interfaz inalámbrica</b><br><br>
	          	<br><b class="blanco">345 -></b><b> slot del bus PCI y la posición de la interfaz inalámbrica en el sistema</b><br><br>
	          	<br><b class="blanco">67 -></b><b> interfaz Ethernet</b><br><br>
	          	<br><b class="blanco">89 -></b><b> Corresponde al slot del bus PCI donde está ubicada la tarjeta de red</b><br><br>
	          	<br><b class="blanco">xx -></b><b> Indica la interfaz número 0 en ese slot PCI. Si hubiera más de una interfaz en el mismo slot, se usarían s1, s2, y así sucesivamente</b><br>
	          	
	          	


	        </p>
		</main>
		<footer class="fondoNegro textoSerio letraBlanca">
      		<p>©Copyright 2023 Favio Joel Zalazar. Todos los derechos reservados.</p><button onclick="location.href='<?php $ruta27 ?>'">Subir</button>
    	</footer>
	</body>
</HTML>