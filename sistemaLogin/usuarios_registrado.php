<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
</head>
<body>

	<?php 

		session_start();

		if(!isset($_SESSION["usuario"])){

			header("Location:login.php");

		}

	 ?>

	<h1>Bienvenidos Usuarios</h1>

	<?php 

		echo "Hola: " . $_SESSION["usuario"] . "<br><br>";

	 ?>

	<p>Esto es informacion solo para usuarios registrados</p>
	
</body>
</html>