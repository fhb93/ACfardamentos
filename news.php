<!DOCTYPE html>
<html lang="pt-br">
	<head>	
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<meta name="viewport" content="width=device-width">		
		<link rel="stylesheet" type="text/css" href="css/news.css">
		<script src="js/bootstrap.js"></script>
		<!-- <link href="https://fonts.googleapis.com/css?family=Sahitya" rel="stylesheet">	 -->
	</head>	
	<body>
		<div class="container-fluid">
			<div class="row">
				<!-- <div class="col-xs-6 col-xs-offset-4 col-sm-12 col-sm-offset-0 col-md-12 col-md-offset-0 col-lg-12 col-lg-offset-0"> -->
				<div class="col-xs-6 col-xs-offset-1">
					<h1 class="nossos-produtos">Nossos produtos:</h1>
				</div>
				<div class="col-xs-5">
					<h2 class="h2Sobre">Para mais informações e preços, entre em contato</h2>
				</div>
				<!-- </div> -->
			</div>
			<div class="row">
				<div class="col-xs-4">
					<?php
						include("menu-bar.php");
					?>
				</div>
				<div class="col-xs-12 col-md-10 col-md-offset-3">

					<div class="roupas">
						<br>
						<!-- <div class="table-responsive"> -->
							<table>
								<thead>
									<tr>
										<th class="col-xs-4">Fardas Escolares</th>
										<th class="col-xs-4">Camisetas Promocionais</th>
										<th class="col-xs-4">Roupas Profissionais</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="col-xs-4"><a href="listaFardas.php"><img src="img/produtos/fariasbrito1.jpg" alt="Foto de Camiseta Branca"><legend>Fardas de todos<br>os tamanhos e tecidos</legend></a></td>
										<td class="col-xs-4"><img src="img/produtos/foto4.jpg" alt="Foto de Camiseta Branca"><legend>Camisetas especiais,<br>temas diversos</legend></td>
										<td class="col-xs-4"><img src="img/produtos/foto2.jpg" alt="Foto de fardamento profissional"><legend>Fardamentos profissionais<br>para empresas</legend></td>
									</tr>
								</tbody>
							</table>
						<!-- </div> -->
					</div>
				</div>
			</div>
		</div>
	</body>
</html>