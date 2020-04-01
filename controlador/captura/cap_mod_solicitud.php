<?php

require_once '../../modelo/conexion.php';
require_once '../../modelo/solicitud.php';

//captura de datos

	$id = (int)$_GET['id'];
	$cedula = $_POST["cedula"];
	$nombres = $_POST["nombres"];
	$apellidos = $_POST["apellidos"];
	$telefono = $_POST["telefono"];
	$correo = $_POST["correo"];
	$seccion = $_POST["seccion"];
	$trimestre = $_POST["trimestre"];
	$turno = $_POST["turno"];
	$motivo = $_POST["motivo"];
	$respuesta = $_POST["respuesta"];

	list($nombre1, $nombre2) = explode(" ", $nombres);
	list($apellido1, $apellido2) = explode(" ", $apellidos);

	$nuevo = new Solicitud();
	$modificar = $nuevo->modificarSolicitud($conexion, $id, $cedula, $nombre1, $nombre2, $apellido1, $apellido2, $telefono, $correo, $seccion, $trimestre, $turno, $motivo, $respuesta);
	if (isset($modificar)) {
		header('Location: ../../vista/Incidencia/vis_lis_solicitud.php');
	}
