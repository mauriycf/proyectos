<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>

	<style>
		
		td{
			border: 2px #B5AFAF;
		}

		.table {
			width: 800px;
			margin: auto;
		}

	</style>

	<link rel="stylesheet" href="../css/master.css">

	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

</head>
<body>

	<div class="container">
		
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Direccion</th>
				</tr>
			</thead>

			<tbody>

				<?php foreach($consulta as $personas):?>

				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td><input type="button" name="borrar" value="Delete"><input type="button" name="actualizar" value="Update"></td>
				</tr>

				<?php endforeach; ?>

				<tr>
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