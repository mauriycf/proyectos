<?php 

	require_once("modelo/consultaProducto.php");

	$personas=new Consulta_modelo();

	$matrizPersonas=$personas->get_personas();

	require_once("vista/personasView.php");

 ?>