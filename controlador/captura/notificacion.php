<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once '../php/funciones.php';
require_once '../../modelo/conexion.php';
require_once '../../modelo/notificacion.php';
//captura de datos
//if ($_POST){

	$fecha = $_POST["fecha"];
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
	
	list($date, $hora) = explode(" ", $fecha);
	list($nombre1, $nombre2) = explode(" ", $nombres);
	list($apellido1, $apellido2) = explode(" ", $apellidos);	

	$nuevo = new Notificacion();
	$registro = $nuevo->registrarNotificacion($conexion, $date, $hora, $cedula, $nombre1, $nombre2, $apellido1, $apellido2, $telefono, $seccion, $trimestre, $turno, $motivo, $respuesta, $medidas);
	if (isset($registro)) {
		header('Location: ../../vista/Incidencia/vis_lis_notificacion.php');
	}

	/*$query = "INSERT INTO notificacion(date, hora, cedula, nombre1, nombre2, apellido1, apellido2, telefono, seccion, trimestre, turno, motivo, respuesta, medidas) VALUES ('$date', '$hora', '$cedula', '$nombre1', '$nombre2', '$apellido1', '$apellido2', '$telefono', '$seccion', '$trimestre', '$turno', '$motivo', '$respuesta', '$medidas');";
	$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());   

	if (!$result) {
		echo "Problemas al cargar los datos";
	}else{
		header('Location: ../Incidencia/notificacion.php');
	}*/

/*
//imprime datos para validacion de captura
	echo "fecha: $fecha";
	echo "<br>";
	echo "motivo: $motivo";
	echo "<br>";
	echo "nombres: $nombres";
	echo "<br>";
	echo "cedula: $cedula";
	echo "<br>";
	echo "apellidos: $apellidos";
	echo "<br>";
	echo "nCasoNotificacion: $nCasoNotificacion";
	echo "<br>";
	echo "respuesta: $respuesta";
	echo "<br>";
	echo "telefono: $telefono";
	echo "<br>";
	echo "seccion: $seccion";
	echo "<br>";
	echo "trimestre: $trimestre";
	echo "<br>";
	echo "turno: $turno";
	echo "<br>";
	echo "medidas: $medidas";
	echo "<br>";*/
?>