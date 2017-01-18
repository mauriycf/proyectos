<?php 

try{

	$login = $_POST['login'];
	$contraseña = $_POST['password'];

	$base = new PDO ('pgsql:host=localhost; dbname=registro; user=mviana; password=123456');

	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "SELECT * FROM registro WHERE usuario= '$login' AND password= '$contraseña'";

	$resultado = $base->prepare($sql);

	$login = htmlentities(addslashes($_POST["login"]));
	$passwrod = htmlentities(addslashes($_POST["password"]));

	$resultado->execute();

	$numero_registro = $resultado ->rowCount();

	if ($numero_registro != 0) {
		
		session_start();

		$_SESSION["usuario"]=$_POST["login"];

		header("Location:usuarios_registrado.php");

	}else{

		header("location:login.php");

	}


}catch(Exception $e){

	die("Error: " . $e->getMessage());

}

 ?>