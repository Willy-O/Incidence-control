<?php

require_once 'conexion.php';

class Memo{

	public function registrarMemo($conexion, $date, $de, $para, $motivo, $notas, $anexos, $hora){
		$query = "INSERT INTO memo(date, de, para, motivo, notas, anexos, hora) VALUES ('$date', '$de', '$para', '$motivo', '$notas', '$anexos', '$hora');";
		$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());   
		return $result;
	}
	public function modificarMemo($conexion, $id, $de, $para, $motivo, $notas){
		$query =  "UPDATE memo SET de='$de', para='$para', motivo='$motivo', notas='$notas' WHERE id='$id'";
		$result = pg_query($conexion, $query) or die('ERROR AL MODIFICAR DATOS: ' . pg_last_error());
		return $result;
	}
    function borrarMemo($id,$conexion){
        $query = "DELETE FROM memo WHERE id = $id";
        $result = pg_query($conexion, $query) or die('ERROR AL ELIMINAR LOS DATOS: '.pg_last_error());
		return $result;
    }

	public function listarMemo($conexion){
		$query = "SELECT * FROM memo";
		$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
		#while($row = pg_fetch_assoc($result))
		return $result;
	}
	public function consultarMemo($id,$conexion){
		$query = "SELECT * FROM memo WHERE id =".$id;
		$result = pg_query($conexion, $query) or die('ERROR AL CONSULTAR DATOS: ' . pg_last_error());
		return $result;
	}
	public function colsultarMemo($conexion, $id){
        $query = "SELECT * FROM memo WHERE id =".$id;
		//if($id != null){
		//	$query .= " WHERE id =".$id;
		//}			
		$result = pg_query($conexion, $query) or die('ERROR AL CONSULTAR LOS DATOS: '.pg_last_error());
		return $result;
	}

}
?>
