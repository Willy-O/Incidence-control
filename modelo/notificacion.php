<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once 'conexion.php';

class Notificacion{

	public function registrarNotificacion($conexion, $date, $hora, $cedula, $nombre1, $nombre2, $apellido1, $apellido2, $telefono, $seccion, $trimestre, $turno, $motivo, $respuesta, $medidas)
	{
		$query = "INSERT INTO notificacion(date, hora, cedula, nombre1, nombre2, apellido1, apellido2, telefono, seccion, trimestre, turno, motivo, respuesta, medidas) VALUES ('$date', '$hora', '$cedula', '$nombre1', '$nombre2', '$apellido1', '$apellido2', '$telefono', '$seccion', '$trimestre', '$turno', '$motivo', '$respuesta', '$medidas')";
		$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());   
		return $result;
	}
	
	public function listarNotificacion($conexion){
    $query = "SELECT * FROM notificacion";
    $result = pg_query($conexion, $query) or die('ERROR AL LISTAR LOS DATOS: ' . pg_last_error());
	#while($row = pg_fetch_assoc($result))
    return $result;
	}

    public function borrarNotificacion($id,$conexion){
        $query = "DELETE FROM notificacion WHERE id = $id";
        $result = pg_query($conexion, $query) or die('ERROR AL ELIMINAR LOS DATOS: '.pg_last_error());
		return $result;
	}

	public function colsultarNotificacion($conexion, $id){
        $query = "SELECT * FROM notificacion WHERE id =".$id;
		//if($id != null){
		//	$query .= " WHERE id =".$id;
		//}			
		$result = pg_query($conexion, $query) or die('ERROR AL CONSULTAR LOS DATOS: '.pg_last_error());
		return $result;
	}

	public function modificarNotificacion($conexion, $id, $cedula, $nombre1, $nombre2, $apellido1, $apellido2, $telefono, $seccion, $trimestre, $turno, $motivo, $respuesta, $medidas){
		$query =  "UPDATE notificacion SET cedula='$cedula', nombre1='$nombre1', nombre2='$nombre2', apellido1='$apellido1', apellido2='$apellido2', telefono='$telefono', trimestre='$trimestre', turno='$turno', motivo='$motivo', respuesta='$respuesta', medidas='$medidas' WHERE id='$id'";
		$result = pg_query($conexion, $query) or die('ERROR AL MODIFICAR DATOS: ' . pg_last_error());
		return $result;
	}
}
?>
