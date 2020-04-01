<?php

require_once '../../modelo/conexion.php';
require_once '../../modelo/notificacion.php';

	$id = $_GET['id'];
	$nuevo = new Notificacion();
	$consultar = $nuevo->borrarNotificacion($id, $conexion);
	if (isset($consultar)) {
		header('Location: ../../vista/Incidencia/vis_lis_notificacion.php');
	}

