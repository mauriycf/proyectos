<?php
require_once "sistema/sesion.php";
use sistema\sesion;
$sesion = new Sesion();
if ($sesion->existe('usuario_logado')) {
	$usuario = $sesion->ler('usuario_conectado');
} else {
	header('location: login.php');
	exit;
}
?><!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-responsive.min.css">
</head>
<body>
<div class="container">
	<div style="height: 100px;"></div>
	<h1>Olá <?= $usuario->nome ?>! Você está logado no sistema.</h1>
</div>
</body>
</html>