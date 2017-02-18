<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>AC Fardamentos</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/reset.css">
		
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/styles.css">
		<!-- <link href="https://fonts.googleapis.com/css?family=Sahitya" rel="stylesheet">	 -->
	</head>	
	<body>
	<div>
	<?php
		include("header.php");
	?>
	<?php 
		include("news.php");
	?>
	</div>
	<section class="menu-bar">
			<nav>
				<ul>
					<li><a href="index.php">Página Principal</a>
					<li><a href="sobre.php">Sobre a AC</a></li>
				 	<li><a href="#">Fardas</a>
				 		<ul>
				 			<li><a href="#">Calças</a></li>
							<li><a href="#">Calças de Brim</a></li>
							<li><a href="#">Calção de Elastano</a></li>
							<li><a href="#">Calção Tactel</a></li>
				 			<li><a href="#">Calção de Brim</a></li>
				 			<li><a href="#">Camisetas</a></li>
				 			<li><a href="#">Gola Careca</a></li>
				 			<li><a href="#">Gola Polo</a></li>
				 		</ul>
				 	</li> 	
					<li><a href="#">Camisetas</a>
						<ul>
							<li><a href="#">Camisetas Brancas</a></li>
							<li><a href="#">Camisetas Pretas</a></li>
							<li><a href="#">Outras Cores</a></li>
						</ul>
					</li>
				</ul>
			</nav>
	</section>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<?php
		include("footer.php");
	?>
	</body>
</html>