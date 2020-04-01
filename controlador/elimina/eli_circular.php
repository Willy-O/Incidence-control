<?php

require_once '../../modelo/conexion.php';
require_once '../../modelo/circular.php';

	$id = $_GET['id'];
	$nuevo = new Circular();
	$consultar = $nuevo->borrarCircular($id, $conexion);
	if (isset($consultar)) {
		header('Location: ../../vista/Circular/vis_lis_circular.php');
	}


