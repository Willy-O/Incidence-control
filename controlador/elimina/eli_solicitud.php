<?php

require_once '../../modelo/conexion.php';
require_once '../../modelo/solicitud.php';

	$id = $_GET['id'];
	$nuevo = new Solicitud();
	$consultar = $nuevo->borrarSolicitud($id, $conexion);
	if (isset($consultar)) {
		header('Location: ../../vista/Incidencia/vis_lis_solicitud.php');
	}


