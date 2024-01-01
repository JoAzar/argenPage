<?php include '../rutas.php'; ?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>[ Bash ]</title>
		<link rel="stylesheet" href='<?php echo ruta0 ?>'>            
	</head>
	<body>
		
	</body>
		<header class="fondoNegroSuave" >
			<h1 class="letraBlanca sombraNegra textoSerio dropSombraBlanca">Bash Code</h1>
		</header>
		<nav class="navDesplegable fondoBlanco dropSombraBlanca">
			<ul class="menu">
				<li>
					<h1 class="nav1 menuIcon2" onclick="location.href='<?php echo iniciol ?>'"></h1>
				</li>
				<li>
					<h1 class="nav1 textoSerio">Lenguajes</h1>
					<ul class="submenu">
						<?php foreach ($lenguajes as $ruta => $nombre): ?>
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

		<main>
			<h2 class="subrayado letraEpica subrayado">¿Cómo comenzar?</h2>
			<p>
				<b class="letraBlanca textoFino tamanioMed">Ejecuta el comando: </b><b class="letraNaranja textoFino tamaniopeq">nano ~/.bashrc</b><b class="letraBlanca"> Para ver todos los alias, una vez dentro de archivo </b><b class="letraNaranja textoFino tamaniopeq">.bashrc</b><b class="letraBlanca"> vas a encontrar algo así: </b>
				<b class="letraNaranja textoFino tamanioMed">alias actualizar=sudo apt update && apt full-upgrade</b>
				</p>
			</p>

			<h2 class="textoSerio tamanioMed letraVerde subrayado">Comandos editados de BASH</h2>
			<p>
	          	<br><b class="letraBlanca tamaniopeq"> iniciar apache =</b><b class="letraNaranja tamaniopeq"> apacheini</b><br>
				<br></b><b class="letraBlanca tamaniopeq">cerrar apache =</b><b class="letraNaranja tamaniopeq"> apachefin</b><br>
				<br><b class="letraBlanca tamaniopeq">reiniciar apache =</b><b class="letraNaranja tamaniopeq"> apacheres</b><br>

				<br><b class="letraBlanca tamaniopeq">iniciar postgresql =</b><b class="letraNaranja tamaniopeq"> postgresini</b><br>
				<br><b class="letraBlanca tamaniopeq">finalizar postgresql =</b><b class="letraNaranja tamaniopeq"> postgresfin</b><br>

				<br><b class="letraBlanca tamaniopeq">sudo apt update && apt full-upgrade = </b><b class="letraNaranja tamaniopeq">actualizar</b><br>
				<br><b class="letraBlanca tamaniopeq">history -c && history -w && rm ~/.bash_history = </b><b class="letraNaranja tamaniopeq">rmhistorial</b><br>
				<br><b class="letraBlanca tamaniopeq">sudo sync && sudo sysctl vm.drop_caches=3 = </b><b class="letraNaranja tamaniopeq">liberar</b><br>
				<br><b class="letraBlanca tamaniopeq">xdotool getmouselocation = </b><b class="letraNaranja tamaniopeq">mousefind</b><br>
				<br><b class="letraBlanca tamaniopeq">sudo service mysql start = </b><b class="letraNaranja tamaniopeq">sqlini</b><br>
				<br><b class="letraBlanca tamaniopeq">sudo service mysql stop  = </b><b class="letraNaranja tamaniopeq">sqlfin</b>
	        </p>
	        
	        <h2 class="textoSerio tamanioMed letraVerde subrayado">Cambiar case sensitive de la terminal</h2>
			<p>
				<b class='letraBlanca tamaniopeq'>shopt -s nocaseglob = </b><b class="letraNaranja tamaniopeq">Activar modo case-insensitive</b><br>
				<br><b class='letraBlanca tamaniopeq'>shopt -u nocaseglob = </b><b class="letraNaranja tamaniopeq">Volver al modo case-sensitive</b><br>
	        </p>

	        <h2 class="textoSerio tamanioMed letraVerde subrayado">Copiar archivos de una carpeta a otra</h2>
			<p>
				<b class='letraBlanca tamaniopeq'>sudo cp </b><b class="letraNaranja tamaniopeq">/llenar/llenar/DondeEstá/archivo.txt /llenar/llenar/DondeLoLLevo</b><br>
			
	        </p>

	        <h2 class="textoSerio tamanioMed letraVerde subrayado">Ver archivos modificados</h2>
			<p>
				<b class='letraBlanca tamaniopeq'>en los últimos 3 días -> </b><b class="letraNaranja tamaniopeq">find / -type f -mtime -3</b><br>
	          	<br><b class='letraBlanca tamaniopeq'>en los últimos 30min -> </b><b class="letraNaranja tamaniopeq">find / -type f -mmin -30</b><br>

	        </p>
	       
	        <h2 class="textoSerio tamanioMed letraVerde subrayado">Copiar archivos de una carpeta a otra</h2>
			<p>
				<b class='letraBlanca tamaniopeq'>Abrir nueva terminal -> </b><b class="letraNaranja tamaniopeq">Ctrl + Alt + T</b><br>
	          	<br><b class='letraBlanca tamaniopeq'>Ver numeración de lineas en nano -> </b><b class="letraNaranja tamaniopeq">alt + ctrl + 3</b><br>
	          	<br><b class='letraBlanca tamaniopeq'>Ocultar menu de terminal -> </b><b class="letraNaranja tamaniopeq">gsettings set org.gnome.Terminal.Legacy.Settings default-show-menubar false</b><br>
	        </p>

	        <h2 class="textoSerio tamanioMed letraVerde subrayado">Cambiar MAC</h2>
			<p>
	          	<b class="tamaniopeq letraBlanca">Dar de baja la MAC -> </b><b class="letraNaranja tamaniopeq">sudo ifconfig (NOMBRE DE LA NET) down</b><br>
	          	<br><b class="tamaniopeq letraBlanca">Cambiar la MAC -> </b><b class="letraNaranja tamaniopeq">sudo macchanger -r (NOMBRE DE LA NET)</b><br>
	          	<br><b class="tamaniopeq letraBlanca">Dar de alta la MAC -> </b><b class="letraNaranja tamaniopeq">sudo ifconfig (NOMBRE DE LA NET) up</b><br>
	        </p>

	        <h2 class="textoSerio tamanioMed letraVerde subrayado">Codificaciones Base64 y Hex</h2>
	        <p>
	        	<b class="tamaniopeq letraBlanca">Códificar texto base 64 -></b><b class="letraNaranja tamaniopeq"> echo "MI TEXTO" | base64</b><br>
	        	<br><b class="tamaniopeq letraBlanca">Decodificar texto base 64 -></b><b class="letraNaranja tamaniopeq"> base64 -d</b><br>
	        	<br><b class="tamaniopeq letraBlanca">Códificar Hexadecimal -></b><b class="letraNaranja tamaniopeq"> echo "MI TEXTO" | xxd</b><br>
	        	<br><b class="tamaniopeq letraBlanca">Decodificar Hexadecimal -></b><b class="letraNaranja tamaniopeq"> echo "TEXTO HEXA" | xxd -r</b><br>
	        </p>

	        <h2 class="textoSerio tamanioMed letraVerde subrayado">Conectarse a dispositivos por ADB</h2>
	        <p>
	        	<br><b class="letraEpica tamanioMed">¡Debes estar en la misma red WiFi!</b><br><br>
	        	<b class="tamaniopeq letraBlanca">Buscar dispositivos -></b><b class="letraNaranja tamaniopeq"> adb devices</b><br>
	        	<br><b class="tamaniopeq letraBlanca">Conectados por cable/usb -></b><b class="letraNaranja tamaniopeq"> adb -s CÓDIGO_DEL_DISPOSITIVO shell</b><br>
	        	<br><b class="tamaniopeq letraBlanca">Ejecuto el script -></b><b class="letraNaranja tamaniopeq"> ./adbRecon.sh</b><br><br>
	        	<br><b class="letraEpica tamanioMed">Comandos para ejecutar</b><br><br>
	        	<br><b class="tamaniopeq letraBlanca">Abrir una página web -></b><b class="letraNaranja tamaniopeq"> adb shell am start -a android.intent.action.VIEW -d "PAGINA WEB"</b><br>
	        	<br><b class="tamaniopeq letraBlanca">Realizar una llamada-></b><b class="letraNaranja tamaniopeq"> adb shell am start -a android.intent.action.CALL -d tel:NUMERO DE TEL</b><br>
	        	<br><b class="tamaniopeq letraBlanca">Ver cámara Frontal -></b><b class="letraNaranja tamaniopeq"> adb shell am start -a android.media.action.IMAGE_CAPTURE</b><br>
	        	<br><b class="tamaniopeq letraBlanca">Grabar audio -></b><b class="letraNaranja tamaniopeq"> adb shell am start -a android.provider.MediaStore.RECORD_SOUND</b><br>
	        	<br><b class="tamaniopeq letraBlanca">Sonar alarma -></b><b class="letraNaranja tamaniopeq"> adb shell am broadcast -a</b><br>
	        	<br><b class="tamaniopeq letraBlanca">Apagar dispositivo -></b><b class="letraNaranja tamaniopeq"> android.intent.action.ACTION_REQUEST_SHUTDOWN</b><br>
	        	<br><b class="tamaniopeq letraBlanca">Reiniciar dispositivo -></b><b class="letraNaranja tamaniopeq"> adb shell reboot -p</b><br>
	        	<br><b class="tamaniopeq letraBlanca">Botón de retroceso -></b><b class="letraNaranja tamaniopeq"> adb shell input keyevent KEYCODE_BACK</b><br><br>
	        	<br><b class="tamaniopeq letraBlanca">Tomar captura del dispositivo -></b><b class="letraNaranja tamaniopeq"> adb shell screencap -p /sdcard/captura_de_pantalla.png</b><br>
	        	<br><b class="tamaniopeq letraBlanca">Guardar captura en PC -></b><b class="letraNaranja tamaniopeq"> adb pull /sdcard/captura_de_pantalla.png /carpeta/donde/quieras/</b><br>
	        </p>

	        <h2 class="textoSerio tamanioMed letraVerde subrayado">Identificar Sistema Operativo</h2>
	        <p>
	        	<b><b class="tamaniopeq letraBlanca">Buscar dispositivos -></b><b class="letraNaranja tamaniopeq"> ping -c 1 IP</b><br>
	        	<br><b class="tamaniopeq letraBlanca">Windows -></b><b class="letraNaranja tamaniopeq"> ttl 118</b><br>
	        	<br><b class="tamaniopeq letraBlanca">Linux -></b><b class="letraNaranja tamaniopeq"> ttl 60/70</b><br>
	        </p>

	        <br><h2 class="textoSerio tamanioMed letraVerde subrayado">Netdiscover</h2>
	        <p>
	        	<b class="tamanioMed letraEpica">Netdiscover es una herramienta de escaneo de red que se utiliza para descubrir y mostrar dispositivos en una red local (con esta se puede optener la MAC)</b><br><br>
	        	<br><b class="tamaniopeq letraBlanca">Obtener interfaz -></b><b class="letraNaranja tamaniopeq"> ifconfig</b><br>
	        	<br><b class="tamaniopeq letraBlanca">Linux -></b><b class="letraNaranja tamaniopeq"> netdiscover -i Interfaz -r IpPrivada</b><br>
	        </p>

	        <h2 class="textoSerio tamanioMed letraVerde subrayado">Virus total scanner</h2>
	        <p>
	        	<b class="tamanioMed letraEpica">Sirve para escanear archivos y detectar si es malicioso</b><br><br>
	        	<br><b class="tamaniopeq letraBlanca">Escaneo -></b><b class="letraNaranja tamaniopeq"> vtscan ruta/del/archivo</b><br>
	        </p>
	        <br><h2 class="textoSerio tamanioMed letraVerde subrayado">Host request</h2>
	        <p>
	        	<b class="tamanioMed letraEpica">Sirve para escanear una página web y obtener la ip</b><br><br>
	        	<br><b class="tamaniopeq letraBlanca">Escaneo de la página web -></b><b class="letraNaranja tamaniopeq"> host www.mipaginaweb.com</b><br>
	        </p>
	        <br><h2 class="textoSerio tamanioMed letraVerde subrayado">Arpscanner</h2>
	        <p>
	        	<b class="tamanioMed letraEpica">Sirve para obtener la MAC de una red mediante la ip (eth -> MAC)</b><br><br>
	        	<br><b class="tamaniopeq letraBlanca">Busqueda de MAC -></b><b class="letraNaranja tamaniopeq"> Ip link show</b><br>
	        </p>

	        <br><h2 class="textoSerio tamanioMed letraVerde subrayado">Activar/Desactivar SSH</h2>
	        <p>
	        	<b class="tamaniopeq letraBlanca">Detener SSH -></b><b class="letraNaranja tamaniopeq"> sudo systemctl stop ssh</b><br>
	        	<br><b class="tamaniopeq letraBlanca">Iniciar SSH -></b><b class="letraNaranja tamaniopeq"> sudo systemctl start ssh</b><br>
	        	<br><b class="tamaniopeq letraBlanca">Detener SSH -></b><b class="letraNaranja tamaniopeq"> sudo service ssh start</b><br>
	        	<br><b class="tamaniopeq letraBlanca">Iniciar SSH -></b><b class="letraNaranja tamaniopeq"> sudo service ssh stop</b>
	        </p>

	        <br><h2 class="textoSerio tamanioMed letraVerde subrayado">Desactivar ipv6</h2>
	        <p>
	        	<b class="tamaniopeq letraBlanca">Detener ipv6 -></b><b class="letraNaranja tamaniopeq"> sudo sysctl -w net.ipv6.conf.all.disable_ipv6=1 && sysctl -w net.ipv6.conf.default.disable_ipv6=1</b><br>
	        </p>

	        <br><h2 class="textoSerio tamanioMed letraVerde subrayado">Network Manager</h2>
	        <p>
	        	<b class="tamaniopeq letraBlanca">Var conexiones de red activas -></b><b class="letraNaranja tamaniopeq"> nmcli connection show --active</b><br>
	        	<b class="tamaniopeq letraBlanca">Var redes WiFi -></b><b class="letraNaranja tamaniopeq"> nmcli device wifi list</b><br>
	        	<b class="tamaniopeq letraBlanca">Var redes WiFi a la que estamos conectados -></b><b class="letraNaranja tamaniopeq"> nmcli d</b>
	        </p>
		</main>
		<footer class="fondoNegro textoSerio letraBlanca dropSombraNegra">
      		<p >©Copyright 2023 Favio Joel Zalazar. Todos los derechos reservados.</p><button class="girarComoLoquitaHover"onclick="location.href='<?php echo ruta1 ?>'">Subir</button>
    	</footer>
	</body>
</HTML>