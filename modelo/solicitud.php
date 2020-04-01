<?php 

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once 'conexion.php';

class Solicitud{


	public function registrarSolicitud($conexion, $date, $hora, $cedula, $nombre1, $nombre2, $apellido1, $apellido2, $telefono, $correo, $seccion, $trimestre, $turno, $motivo, $respuesta){
	$query = "INSERT INTO solicitud(date, hora, cedula, nombre1, nombre2, apellido1, apellido2, telefono, correo, seccion, trimestre, turno, motivo, respuesta) VALUES ('$date', '$hora', '$cedula', '$nombre1', '$nombre2', '$apellido1', '$apellido2', '$telefono', '$correo', '$seccion', '$trimestre', '$turno', '$motivo', '$respuesta');";
		$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());   
		return $result;
	}

	public function listarSolicitud($conexion){
		$query = "SELECT * FROM solicitud";
		$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
		#while($row = pg_fetch_assoc($result))
		return $result;
	}

	function borrarSolicitud($id,$conexion){
		$query = "DELETE FROM solicitud WHERE id = $id";
		$result = pg_query($conexion, $query) or die('ERROR AL ELIMINAR LOS DATOS: '.pg_last_error());
		return $result;
	}

	public function colsultarSolicitud($conexion, $id){
        $query = "SELECT * FROM solicitud WHERE id =".$id;	
		$result = pg_query($conexion, $query) or die('ERROR AL CONSULTAR LOS DATOS: '.pg_last_error());
		return $result;
	}

	public function modificarSolicitud($conexion, $id, $cedula, $nombre1, $nombre2, $apellido1, $apellido2, $telefono, $correo, $seccion, $trimestre, $turno, $motivo, $respuesta){
		$query =  "UPDATE solicitud SET cedula='$cedula', nombre1='$nombre1', nombre2='$nombre2', apellido1='$apellido1', apellido2='$apellido2', telefono='$telefono', correo='$correo', trimestre='$trimestre', turno='$turno', motivo='$motivo', respuesta='$respuesta' WHERE id='$id'";
		$result = pg_query($conexion, $query) or die('ERROR AL MODIFICAR DATOS: ' . pg_last_error());
		return $result;
	}
}
?>
