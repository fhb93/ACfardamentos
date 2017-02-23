<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>AC Fardamentos</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/news.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/styles.css" media="screen" />
		<link rel="stylesheet" href="fonts/glyphicons-halflings-regular.svg">
		<!-- <link href="https://fonts.googleapis.com/css?family=Sahitya" rel="stylesheet">	 -->
	</head>	
	<body>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<?php
						include("header.php");
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div id="ul-nav-fardas-camisetas">
						<?php
							include("menu-bar.php");
						?>
					</div>
				</div>
			<!-- </div> -->
				<div class="row">
					<div class="col-sm-3">
					</div>
					<div class="col-sm-9">
						<!-- <div class="container"> -->
						<?php 
							include("news.php");
						?>	
					</div>
				</div>	
			</div>
			<div class="row">
				<div class="col-sm-12">
					<?php 
						include("footer.php");
					?>	
				</div>
			</div>
		</div>
	</body>
</html>