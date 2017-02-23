<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>AC Fardamentos</title>
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/news.css">
		<link rel="stylesheet" href="fonts/glyphicons-halflings-regular.svg">
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
				<?php 
					include("news.php");
				?>	
			</div>

			<?php
				include("footer.php");
			?>
		</div>
	</body>
</html>