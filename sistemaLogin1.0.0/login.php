<?php
require_once "sistema/conexion.php";
require_once "sistema/sesion.php";
require_once "sistema/usuario.php";
require_once "sistema/validarException.php";
use sistema\conexion;
use sistema\sesion;
use sistema\usuario;
use sistema\validarException;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
	try {
		$conexion = new Conexion('localhost', 'usuarios', 'root', 'root');
		$sesion = new Sesion();
		$usuario = new Usuario($conexion);
		$u = $usuario->validar($email, md5($pass));
		$sesion->grabar('usuario_conectado', $u);
		header('location: index.php');
		exit;
	} catch (validarException $ex) {
		$mensage = $ex->getMessage();
	} catch (\PDOException $ex) {
		$mensagem = 'Error de conexion o no se encuentra la base de datos';
	}
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-responsive.min.css">
	<style>
		.box-login {
			padding: 10px 14px 0 14px;
			background: #f7f7f7;
			border: 1px solid #ddd;
			-webkit-border-radius: 2px;
			-moz-border-radius: 2px;
			border-radius: 2px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div style="height: 100px;"></div>

		<?php if (isset($mensage)): ?>
		<div class="row">
			<div class="span4 offset4">
				<div class="alert alert-danger alert-block"><?= $mensage ?></div>
			</div>
		</div>
		<?php endif; ?>

		<div class="row">
			<div class="span4 offset4">
				<div class="box-login">
					<form class="form-horizontal" action="login.php" method="post">
						<div class="control-group">
							<label for="control-label">Email</label>
							<input class="input-block-level" type="text" name="email" placeholder="Correo Electronico">
						</div>
						<div class="control-group">
							<label for="control-label">Contraseña</label>
							<input class="input-block-level" type="password" name="pass" placeholder="Contraseña">
						</div>
						<div class="control-group">
							<input class="btn btn-primary btn-block" type="submit" value="Entrar">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>