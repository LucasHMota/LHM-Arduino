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
					<h3><center>Veja o gráfico com as estatísticas</center></h3>
					<ul class="actions">
						<li><a href="semaforo.php" class="button icon solid">Volte para a página principal</a></li>
						<li><a href="#one" class="button icon solid primary">Verifique sua pasta de downloads</a></li>
					</ul>
				</div>
				<div class="image phone"><div class="inner"><img src="images/arduino.jpg" alt="" /></div></div>
				<?php
							/*require("phplot-6.1.0/phplot.php");
							try
							{
								$g=new PHPlot(800,600);
								$g->SetFileFormat('png');
								$g->SetTitle("Media de uso do Semaforo Inteligente pelos pedestres (com base no dia de hoje ate o horario do download)");
								$g->SetPlotType('bars');
								$g->SetYTitle('Quantidade de utilizações');
								$g->SetXTitle('Dia');

								$conectar= new PDO('mysql:host=127.0.0.1;port=3306;dbname=semaforo','root','');
								$conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
								$dados=$conectar->query("SELECT * FROM vendas");

								//extrair os dados
								$matriz=array();
								foreach($dados as $linha)
								{
									$matriz[]=array($linha['date'],$linha['$contador']);
								}

								// desenhar o gráfico
								$g->SetDataValues($matriz);
								$g->SetIsInLine(true);
								$g->SetOutputFile('grafico_semaforo.png');
								$g->DrawGraph();

								echo "<h1>Gráfico gerado com sucesso!</h1>";

							}
							catch(PDOException $erro)
							{
								echo "Houve um erro na geração do gráfico";
							}*/	

				?>
			</header>

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