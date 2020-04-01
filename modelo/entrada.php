<?php 
error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once('conexion.php');

class Entrada{

public function noRespuestaNotificacion($conexion)
    {
        $query = "SELECT COUNT(*) AS total_norespuestan FROM notificacion WHERE respuesta = '' or respuesta = ' ';";
        $result = pg_query($conexion, $query) or die('ERROR: '. pg_last_error());   
        return $result;
    }

public function noRespuestaSolicitud($conexion)
    {
        $query = "SELECT COUNT(*) AS total_norespuestas FROM solicitud WHERE respuesta = '' or respuesta = ' ';";
        $result = pg_query($conexion, $query) or die('ERROR: '. pg_last_error());   
        return $result;
    }

public function totalNotificacion($conexion)
    {
        $query = "SELECT COUNT(*) AS total_respuestan FROM notificacion;";
        $result = pg_query($conexion, $query) or die('ERROR: '. pg_last_error());   
        return $result;
    }

public function totalSolicitud($conexion)
    {
        $query = "SELECT COUNT(*) AS total_respuestas FROM solicitud;";
        $result = pg_query($conexion, $query) or die('ERROR: '. pg_last_error());   
        return $result;
    }
    public function totalMemo($conexion)
    {
        $query = "SELECT COUNT(*) AS total_memo FROM memo;";
        $result = pg_query($conexion, $query) or die('ERROR: '. pg_last_error());   
        return $result;
    }
    public function totalCircular($conexion)
    {
        $query = "SELECT COUNT(*) AS total_circular FROM circular;";
        $result = pg_query($conexion, $query) or die('ERROR: '. pg_last_error());   
        return $result;
    }
}
