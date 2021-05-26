<!DOCTYPE HTML>
<!--
	Fractal by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Semáforo Inteligente</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<div class="content">
					<h1><a href="#">Semáforo <img src="images/oie.png" width="60" height="60"/>nteligente</a></h1>
					<p>Tecnologia Arduino aplicada em controle de semáforo<br />
					Template desenvolvido por Semáforo Inc. ADS4</p>
					<ul class="actions">
						<li><a href="grafico.php" class="button primary icon solid fa-download">Fazer download do gráfico (Ainda em desenvolvimento)</a></li>
						<li><a href="#one" class="button icon solid fa-chevron-down scrolly">Acompanhe em tempo real</a></li>
					</ul>
				</div>
				<div class="image phone"><div class="inner"><img src="images/arduino.jpg" alt="" /></div></div>
			</header>

		<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner alt">
					<section class="spotlight">
						<div class="image"><img src="images/sema-azul.png" alt="" /></div>
						<div class="content">
						<h3><center>Quantidade de utilizações do semáforo até o momento.</center></h3>
						<?php

						include('contador.php');
						
						/*$port = fopen("COM6","r");

						echo"Contador= ",fread($port,"contador");
						
						
						Fecha a porta serial
						fclose($port);*/
						?>
						<br>
						</div>
					</section>
					<section class="special">
						<ul class="icons labeled">
							<li> <span class="icon solid fa-sync"><span class="label">Rotatividade automática no trânsito contribuindo para a vida de todos!</span></span></li>
							<li><span class="icon solid fa-desktop"><span class="label">Acompanhe o tráfego direto do seu computador</span></span></li>
						</ul>
					</section>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
					<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
				</ul>
				<p class="copyright">&copy; Lucas Mota. Credits: <a href="http://html5up.net">HTML5 UP</a></p>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>