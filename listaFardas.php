<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>AC Fardamentos</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/news.css">
		<!-- <link rel="stylesheet" type="text/css" href="css/styles.css" media="(max-device-width : 500px)"> -->
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/listas.css">
		<!-- <link href="https://fonts.googleapis.com/css?family=Sahitya" rel="stylesheet">	 -->
		<script src="js/bootstrap.js"></script>
	</head>	
	<body>
		<?php
			include("header.php");
		?>

		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<br><br><br><br><br>
				<?php 
					include("menu-bar.php");
				?>
				</div>
				<!-- <div class="container2"> -->
				<div class="col-xs-8 col-sm-8 col-sm-offset-0">
					<!-- <div id="titulo-colegios"> -->
						<h1 class="h1Sobre">Lista de Fardas por Colégio</h1>
					<!-- </div> -->
					<nav>
						<ul id="lista-colegios">
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
		<br><br><br><br><br><br><br>
		<?php
			include("footer.php");
		?>
	</body>
</html>