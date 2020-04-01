<?php

require_once 'config.php';

$conexion = pg_connect($cadena) or die ("error".pg_last_error());

?>
