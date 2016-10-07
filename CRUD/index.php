<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>
	<link rel="stylesheet" href="css/master.css">
</head>
<body>

<?php 

	include 'conexion.php';

	/*$conexion = $base->query("SELECT * FROM datos_usuario");

	$registro = $conexion -> fetchAll(PDO::FETCH_OBJ);*/

	$registro = $base ->query("SELECT * FROM datos_usuario")->fetchAll(PDO::FETCH_OBJ);

	if(isset($_POST["cr"])){

		$nombre=$_POST["nom"];
		$apellido=$_POST["ape"];
		$direccion=$_POST["dir"];

		$sql="INSERT INTO datos_usuario (nombre, apellido, direccion) VAlUES (:nom, :ape, :dir)";

		$resultado=$base->prepare($sql);

		$resultado->execute(array(":nom"=>$nombre, ":ape"=>$apellido, ":dir"=>$direccion));

		header("Location:index.php");

	}

 ?>

	<h1>CRUD <span class="subtitulo">Create Read Update Delete</span></h1>

	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

	<table width="50%" border="0" align="center">
		<tr>
			<td class="primera_fila">ID</td>
			<td class="primera_fila">Nombre</td>
			<td class="primera_fila">Apellido</td>
			<td class="primera_fila">Direccion</td>
			<td class="sin">&nbsp;</td>
			<td class="sin">&nbsp;</td>
			<td class="sin">&nbsp;</td>
		</tr>
		
		<?php 

			foreach ($registro as $persona):?>

		<tr>
			<td><?php echo $persona->id ?></td>
			<td><?php echo $persona->nombre ?></td>
			<td><?php echo $persona->apellido ?></td>
			<td><?php echo $persona->direccion ?></td>

			<td class="bot"><a href="borrar.php?id=<?php echo $persona->id?>"><input type="button" name="del" id="del" value="Borrar"></a></td>
			<td class="bot"><a href="editar.php?id=<?php echo $persona->id?> & nom=<?php echo $persona->nombre?> & ape=<?php echo $persona->apellido?> & dir=<?php echo $persona->direccion?>"><input type="button" name="up" id="up" value="Actualizar"></a></td>
		</tr>

		<?php 

			endforeach;

		 ?>

		<tr>
			<td></td>
			<td><input type="text" name="nom" size="10" class="centrado"></td>
			<td><input type="text" name="ape" size="10" class="centrado"></td>
			<td><input type="text" name="dir" size="10" class="centrado"></td>
			<td class="bot"><input type="submit" name="cr" id="cr" value="Insertar"></td>
		</tr>

	</table>

	</form>

</body>
</html>