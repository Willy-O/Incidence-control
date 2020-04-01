<?php

require_once '../../modelo/conexion.php';
require_once '../../modelo/notificacion.php';

//captura de datos

	$id = (int)$_GET['id'];
	$cedula = $_POST["cedula"];
	$nombres = $_POST["nombres"];
	$apellidos = $_POST["apellidos"];
	$telefono = $_POST["telefono"];
	$seccion = $_POST["seccion"];
	$trimestre = $_POST["trimestre"];
	$turno = $_POST["turno"];
	$motivo = $_POST["motivo"];
	$respuesta = $_POST["respuesta"];
	$medidas = $_POST["medidas"];
	
	list($nombre1, $nombre2) = explode(" ", $nombres);
	list($apellido1, $apellido2) = explode(" ", $apellidos);	

	$nuevo = new Notificacion();
	$modificar = $nuevo->modificarNotificacion($conexion, $id, $cedula, $nombre1, $nombre2, $apellido1, $apellido2, $telefono, $seccion, $trimestre, $turno, $motivo, $respuesta, $medidas);
	if (isset($modificar)) {
		header('Location: ../../vista/Incidencia/vis_lis_notificacion.php');
	}