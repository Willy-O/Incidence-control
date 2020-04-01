<?php
require_once('../../modelo/conexion.php');
require_once('../../modelo/notificacion.php');

#$query = "SELECT * FROM circular";
#$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$consulta = new Notificacion();
$result = $consulta->listarNotificacion($conexion);


