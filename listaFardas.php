<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>AC Fardamentos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="js/bootstrap.js">
		<link rel="stylesheet" href="css/news.css">
		<link rel="stylesheet" href="css/listas.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css" media="(max-device-width : 500px)">
		<link rel="stylesheet" href="css/styles.css">
		<!-- <link href="https://fonts.googleapis.com/css?family=Sahitya" rel="stylesheet">	 -->
	</head>	
	<body>
		<div>
			<?php
				include("header.php");
			?>

			<div class="container">
				<div class="row">
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
					<?php 
						include("menu-bar.php");
					?>
					</div>
					<div class="container2">
						<div class="col-xs-11 col-xs-offset-1">
							<div id="titulo-colegios">
								<h1 class="h1Sobre">Lista de Fardas por Colégio</h1>
							</div>
							<nav>
								<ul id="colegios">
									<li><a href="ari.php"">Farda Escolar Ari de Sá</a></li>
									<li><a href="farias.php">Farda Escolar Farias Brito</a></li>
									<li><a href="kennedy.php">Farda Escolar Kennedy</a></li>
									<li><a href="outubro.php">Farda Escolar 12 de Outubro</a></li>
									<li><a href="shalom.php">Farda Escolar Shalom</a></li>
								</ul>
							</nav>
						</div>	
					</div>
				</div>
			</div>
			<br><br>
			<?php
				include("footer.php");
			?>
		</div>
		<script src="js/bootstrap.js">
		</script>
	</body>
</html>