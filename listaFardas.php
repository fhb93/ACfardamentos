<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>AC Fardamentos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/news.css">
		<link rel="stylesheet" href="css/listas.css">
		<!-- <link href="https://fonts.googleapis.com/css?family=Sahitya" rel="stylesheet">	 -->
	</head>	
	<body>
		<div>
			<?php
				include("header.php");
			?>
			<?php 
				include("menu-bar.php");
			?>
			<div class="container">
				<h1 class="h1Sobre">Lista de Fardas por Colégio</h1>
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
			<br><br>
			<?php
				include("footer.php");
			?>
		</div>
		<script src="js/select.js">

		</script>
	</body>
</html>