<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Index</title>
	<link rel="stylesheet" href="css/master.css">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container-tbl">

		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Direccion</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>

				<?php foreach($matrizPersonas as $registro): ?>

				<tr>
					<td class="tdr"><?php echo $registro["id"]; ?></td>
					<td><?php echo $registro["nombre"]; ?></td>
					<td class="tdr"><?php echo $registro["apellido"]; ?></td>
					<td><?php echo $registro["direccion"]; ?></td>
					<td class="tdr"><input type="button" name="borrar" value="Delete"><input type="button" name="actualizar"
					value="Update"></td>
				</tr>

				<?php endforeach; ?>

				<tr class="tbl_down">
					<td></td>
					<td><input type="text" placeholder="Nombre"></td>
					<td><input type="text" placeholder="Apellido"></td>
					<td><input type="text" placeholder="Direccion"></td>
					<td><input type="submit" value="Insertar" name="insertar"></td>
				</tr>

			</tbody>
		</table>

	</div>

</body>
</html>
