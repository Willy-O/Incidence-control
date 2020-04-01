<?php


//error_reporting(E_ALL);
//ini_set('display_errors', '1');

require_once '../php/funciones.php';
require_once '../../modelo/conexion.php';
require_once '../../modelo/solicitud.php';

//captura de datos
//if ($_POST){
	
	$fecha = $_POST["fecha"];
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

	list($date, $hora) = explode(" ", $fecha);
	list($nombre1, $nombre2) = explode(" ", $nombres);
	list($apellido1, $apellido2) = explode(" ", $apellidos);

	$nuevo = new Solicitud();
	$registro = $nuevo->registrarSolicitud($conexion, $date, $hora, $cedula, $nombre1, $nombre2, $apellido1, $apellido2, $telefono, $correo, $seccion, $trimestre, $turno, $motivo, $respuesta);
	if (isset($registro)) {
		header('Location: ../../vista/Incidencia/vis_lis_solicitud.php');
	}

	/*
	$query = "INSERT INTO solicitud(date, hora, cedula, nombre1, nombre2, apellido1, apellido2, telefono, correo, seccion, trimestre, turno, motivo, respuesta) VALUES ('$date', '$hora', '$cedula', '$nombre1', '$nombre2', '$apellido1', '$apellido2', '$telefono', '$correo', '$seccion', '$trimestre', '$turno', '$motivo', '$respuesta');";
	$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());   

	if (!$result) {
		echo "Problemas al cargar los datos";
	}else{
		header('Location: ../Incidencia/notificacion.php');
	}
	*/
?>