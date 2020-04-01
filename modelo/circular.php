<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once('conexion.php');

class Circular{

public function registrarCircular($conexion, $date, $motivo, $notas, $anexo, $hora, $remitente){
    $query = "INSERT INTO circular(date, motivo, notas, anexo, hora, remitente) VALUES ('$date', '$motivo', '$notas', '$anexo', '$hora', '$remitente');";
    $result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: '. pg_last_error());   
    return $result;
}
#Edita una circular
public function modificarCircular($conexion, $id, $motivo, $notas, $anexo,  $remitente){
    $query =  "UPDATE circular SET motivo='$motivo', notas='$notas', anexo='$anexo', remitente='$remitente' WHERE id='$id'";
    $result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
    return $result;
}
#Borra una circular
function borrarCircular($id,$conexion){
    $query = "DELETE FROM circular WHERE id = $id";
    $result = pg_query($conexion, $query) or die('ERROR AL ELIMINAR LOS DATOS: '.pg_last_error());
    return $result;
}
#Enlista todas las circulares (Sirve para el inicio al seleccionar la opcion circular)
public function listarCircular($conexion){
    $query = "SELECT * FROM circular";
    $result = pg_query($conexion, $query) or die('ERROR AL LISTAR DATOS: ' . pg_last_error());
	#while($row = pg_fetch_assoc($result))
    return $result;
}

#Consultar por cable primaria
public function consultarCircular($conexion, $id){
    $query = "SELECT * FROM circular WHERE id = ".$id;
    $result = pg_query($conexion, $query) or die('ERROR AL CONSULTAR DATOS: ' . pg_last_error());
    return $result;
}
#Consultar por fecha
public function consultarCircularPorFecha($date,$conexion){
    $query = "SELECT * FROM circular WHERE 'date' = $date";
    $result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
    return $result;
}

}
?>
