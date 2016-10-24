<?php

	require_once 'Model/consultaPersona.php';

	$personas = new Consulta_modelo();

	$matrizPersonas=$personas->get_personas();

	require_once 'View/personasView.php';

 ?>
