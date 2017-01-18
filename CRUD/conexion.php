<?php 

	try {
		
		$base = new PDO ('pgsql:host=localhost; dbname=registro; user=mviana; password=123456');

		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch (Exception $e) {
		
		die('Error: '. $e->getMessage());
		echo "Linea del error" . $e->getLine();

	}

 ?>