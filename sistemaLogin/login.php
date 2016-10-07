<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>

	<?php 
/*
		session_start();
		include 'comprueba_login.php';

		if(!isset($_SESSION["usuario"])){

			echo "";

		}else{

			echo '<script> window.location="login.php"; </script>';

		}
*/
	 ?>

	<style>
		h1{
			text-align: center;
		}
		td{
			text-align: center;
			padding: 15px;
		}
		.izq{text-align: right;}
		.der{text-align: left;}
		table{
			width: 25%;
			background-color: #23A4C2;
			border: 2px dotted black;
			margin: auto;
		}

	</style>
	
	<h1>INTRODUCE TUS DATOS</h1>

	<form action="comprueba_login.php" method="POST">
		<table>
		<tr>
		<td class="izq">
			Login:
		</td>
		<td class="der"><input type="text" placeholder="Usuario" name="login"></td>
		</tr>
		<tr><td class="izq">Password:</td>
			<td class="der">
				<input type="password" name="password" placeholder="Contraseña">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="enviar" value="LOGIN">
			</td>
		</tr>
		</table>
	</form>

</body>
</html>