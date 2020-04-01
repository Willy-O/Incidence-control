<?php
require_once('../../modelo/conexion.php');
require_once('../../modelo/memo.php');

#$query = "SELECT * FROM circular";
#$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$consulta = new Memo();
$result = $consulta->listarMemo($conexion);


