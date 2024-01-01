<?php include '../rutas.php'; include '../conexion.php'; ?> 

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Inscripciones</title>
		<link rel="stylesheet" href="../styles/style.css">
	</head>
	<body>
		
	</body>
		<header class="fondoNegroSuave">
			<h1 class="letraNaranjeta sombraNegra textoNova">Materias Inscritas</h1>
		</header>
		<nav class="navDesplegable fondoBlanco dropSombraBlanca">
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
						<?php foreach ($bitacora as $ruta => $nombre): ?>
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
						<?php foreach ($hackingr as $ruta => $nombre): ?>
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
		<main class="fondoImagenCiudad3 padding2">

			<?php foreach($datosAlumnosArr as $id_relacion => $alumno) { ?>

			<div class="flex widMax90 altura30">
				<img class="radius margen3 bordeBlancoFino margen2" src="../images/<?php echo $fotosArr[$id_relacion];  ?>">
				<h1 class="textoPixel letraBlanca sombraNegra tamaniopeq fondoVidrio margen2 padding2"><?php echo $alumno; ?></h1>

				<div class="fondoVidrio bordeBlanco margen2 dropSombraNegra flex horizontal altura10">
					<ul class="grilla fondoNaranjeta bordeBlanco flex vertical centrarCaja">
						<li class="grilla">
							<b class="letraBlanca sombraNegra textoNova">Día</b>
								<li class="letraBlanca sombraNegra textoNova grilla"><?php echo $diaArr[$id_relacion];?>
						</li>
					</ul>
					<ul class="grilla fondoNaranjeta bordeBlanco flex vertical centrarCaja">
						<li class="grilla">
							<b class="letraBlanca sombraNegra textoNova">Hora</b>
								<li class="letraBlanca sombraNegra textoNova grilla"><?php echo $horariosArr[$id_relacion];?></li>
						</li>
					</ul>
					<ul class="grilla fondoNaranjeta bordeBlanco flex vertical centrarCaja">
						<li class="grilla">
							<b class="letraBlanca sombraNegra textoNova">Materia</b>
								<li class="letraBlanca sombraNegra textoNova grilla"><?php echo $materiaArr[$id_relacion]; ?></li>
						</li>
					</ul>

					<ul class="grilla fondoNaranjeta bordeBlanco flex vertical centrarCaja">
						<li class="grilla">
							<b class="letraBlanca sombraNegra textoNova">Comisión</b>
								<li class="letraBlanca sombraNegra textoNova grilla"><?php echo $comisionArr[$id_relacion]; ?></li>
						</li>
					</ul>

					<ul class="grilla fondoNaranjeta bordeBlanco flex vertical centrarCaja">
						<li class="grilla">
							<b class="letraBlanca sombraNegra textoNova">Profesores</b>
								<li class="letraBlanca sombraNegra textoNova grilla"><?php echo $profesorArr[$id_relacion]; ?></li>
						</li>
					</ul>

					<ul class="grilla fondoNaranjeta bordeBlanco flex vertical centrarCaja">
						<li class="grilla">
							<b class="letraBlanca sombraNegra textoNova">Aula</b>
								<li class="letraBlanca sombraNegra textoNova grilla"><?php echo $comisionArr[$id_relacion]; ?></li>
						</li>
					</ul>

				</div>
			</div>
			<?php } ?>

		</main>
		<footer class="fondoNegro dropSombraNegra letraBlanca sombraNegra">
      		<p>©Copyright 2023 Favio Joel Zalazar. Todos los derechos reservados.</p><button class="botonNaranjetaHover dropSombraBlancaHover" onclick="location.href='inscripcion.php'">Subir</button>
    	</footer>
	</body>


</HTML>