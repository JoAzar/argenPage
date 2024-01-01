<?php include 'rutas.php' ?> 


<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Acerca de</title>
		<link rel="stylesheet" href="styles/style.css">
	</head>
	<body>
		
	</body>
		<header class="fondoAzul">
			<h1 class="textoSerio tamanioGran letraBlanca sombraNegra">¿Quién soy?</h1>
		</header>
		<nav class="navDesplegable fondoBlanco dropSombraNegra">
			<ul class="menu">
				<li>
					<h1 class="nav1 menuIcon" onclick="location.href='<?php echo inicio ?>'"></h1>
				</li>
				<li>
					<h1 class="nav1 textoSerio tamanioMed">Lenguajes</h1>
					<ul class="submenu">
						<?php foreach ($lenguajesl as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraEpicaHover tamaniopeq" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon smallIcons" 	src="icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				
				</li>
				<li>
					<h1 class="nav1 textoSerio tamanioMed">Bitácora</h1>
					<ul class="submenu">
						<?php foreach ($bitacoral as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraEpicaHover tamaniopeq" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon smallIcons" src="icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li>
					<h1 class="nav1 textoSerio tamanioMed">Hardware</h1>
					<ul class="submenu">
						<?php foreach ($hardwarel as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraEpicaHover tamaniopeq" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon smallIcons" src="icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li>
					<h1 class="nav1 textoSerio tamanioMed">Hacking</h1>
					<ul class="submenu">
						<?php foreach ($hackingl as $ruta => $nombre): ?>
							<li>
								<h1 class="textoSerio letraEpicaHover tamaniopeq" onclick="location.href='<?php echo $ruta ?>'"><?php echo $nombre ?><img class="icon smallIcons" 	src="icons/<?php echo strtolower($nombre) ?>.png">
								</h1>
							</li>
						<?php endforeach; ?>
					</ul>
				</li>
				<li>
					<h1 class="nav1 textoSerio" onclick="location.href='<?php echo nosotros ?>'">Acerca de</h1>
				</li>
			</ul>
		</nav>
		<main>
			<h2 class="subrayado tamanioGran letraEpica textoSerio">Acerca de</h2>
			<p >
				<b class="textoSerio tamanioMed dropSombraBlanca letraBlanca">¿Quién soy?</b><br>
				<br><b class="letraBlanca tamaniopeq"> Actualmente soy estudiante universitario en UNGS, apasionado por el aprendizaje autodidacta, amante del conocimiento y la sabiduría. Desarrollador web con experiencia en diversas tecnologías, como Java, Python, PHP, HTML, CSS y Javascript, entre otros. También me desarrollé en diversos oficio para alcanzar el sueño de mis abuelos, y mio, de ser el primer hombre de la familia en formar parte de la Universidad.
				Considero que puedo alcanzar esa y muchas otras metas debido a mi mentalidad estoica y resiliente, si quiero algo tengo que trabajar duro para conseguirlo y cuando lo consigo busco alcanzar una nueva meta para seguir desafiando mis capacidades, los resultados fáciles muchas veces carecen de logros y enseñanzas.
				</b><br>
				<br><b class="tamanioMed textoSerio letraEpica dropSombraBlanca"><br>👑 Los valores hacen al hombre 👑</b><br>
				<div class="cajaSombraNegra padding2 fondoAzul letraBlanca dropSombraBlanca">
					<br><b class="letraCeleste dropSombraBlanca flash">[ Humildad ]</b><br>
					<br><b class="letraCeleste dropSombraBlanca flash">[ Pasión por la innovación ]</b><br>
					<br><b class="letraCeleste dropSombraBlanca flash">[ Colaboración y conocimiento compartido ]</b><br>
					<br><b class="letraCeleste flash dropSombraBlanca">[ Compromiso con la excelencia ]</b><br>
					<br><b class="letraCeleste dropSombraBlanca flash">[ Ética y responsabilidad ]</b><br>
					<br><b class="letraCeleste flash dropSombraBlanca">[ Mentalidad de aprendizaje continuo ]</b><br>
					<br><b class="letraCeleste dropSombraBlanca flash">[ Diversidad e inclusión ]</b><br>
					<br><b class="letraCeleste flash dropSombraBlanca">[ Resiliencia y adaptabilidad ]</b><br>
				</div>
				<b class="padding2 textoSerio tamanioMed dropSombraBlanca letraBlanca">¿A dónde voy, de dónde vengo, qué pretendo de la vida?</b>
				<b class="letraBlanca tamaniopeq widMax80">Para mi la vida es una aventura que disfruto mucho. Vengo de disfrutar toda clase de aventuras desde ir de pesca hasta trabajar horas bajo la lluvia en pleno invierno empapado hasta el cuello. Es por eso que siento una enorme sed por seguir viviendo para poder ir hacia más aventuras, tomandome las cosas con la seriedad que merecen y enfrentando cada experiencia sin miedo y con mucha alegría. Considero que tengo la capacidad para superar grandes obstáculos, la sabiduría para levantarme al caer y un amor profundo por el trabajo. Por esto pretendo ir más allá de mis propios límites, romper mi molde y sorprenderme a mí mismo.</b><br>
			</p>
		</main>
		<footer class="fondoNegro letraBlanca textoSerio">
      		<p>©Copyright 2023 Favio Joel Zalazar. Todos los derechos reservados.</p><button onclick="location.href='nosotros.php'">Subir</button>
    	</footer>
	</body>
</HTML>