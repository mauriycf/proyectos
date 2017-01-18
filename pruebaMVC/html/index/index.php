<?php include(HTML_DIR . 'overall/header.php'); ?>

<body>

	<!-- barra de navegacion -->

	<?php include (HTML_DIR . 'overall/top-nav.php'); ?>

	<!-- jumbotron -->

	<div class="jumbotron">
		<div class="jumbotron-caja">
			<div class="jumbotron-caja1">
				<img src="views/app/images/VUIT.png" alt="" class="jumbotron-imagen">
			</div>
			<div class="jumbotron-caja2">
				<h2 class="jumbotron-titulo">Lorem ipsum dolor sit</h2>
			</div>
			<h4 class="jumbotron-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, iste, neque.</h4>
			<ul class="jumbotron-boton">
				<li><a href="#">Lorem ipsum dolor.</a></li>
			</ul>
		</div>
	</div>

	<!-- Informacion -->

	<div class="informacion">
		<div class="row">
			<div class="col">
				<div class="informacion-img">
					<img src="views/app/images/archivero.png">
				</div>
				<div class="informacion-titulo">
					<h4>Lorem ipsum.</h4>
					<h2>Lorem ipsum.</h2>
				</div>
				<div class="informacion-parrafo">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores harum consequuntur ipsam incidunt quidem?</p>
				</div>
				<ul>
					<li><a class="rojo" href="#">Lorem ipsum.</a></li>
					<li><a class="verde" href="#">Lorem ipsum.</a></li>
				</ul>
			</div>
			<div class="col">
				<div class="informacion-img">
					<img src="views/app/images/documentos.png">
				</div>
				<div class="informacion-titulo">
					<h4>Lorem ipsum.</h4>
					<h2>Lorem ipsum.</h2>
				</div>
				<div class="informacion-parrafo">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores harum consequuntur ipsam incidunt quidem?</p>
				</div>
				<ul>
					<li><a class="rojo" href="#">Lorem ipsum.</a></li>
					<li><a class="verde" href="#">Lorem ipsum.</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="formulario">
		<form action="">
			<input type="textfield" name="name" value="">
			<textarea name="name" rows="8" cols="40"></textarea>
		</form>
	</div>

	<!-- footer -->

	<?php include (HTML_DIR . 'overall/footer.php'); ?>
