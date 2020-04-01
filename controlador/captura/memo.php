<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

require_once '../php/funciones.php';
require_once '../../modelo/conexion.php';
require_once '../../modelo/memo.php';

//if ($_POST){
	$nCasoMemo = $_POST["nCasoMemo"];
	$fecha = $_POST["fecha"];
	$de = $_POST["de"];
	$para = $_POST["para"];
	$motivo = $_POST["motivo"];
	$notas = $_POST["notas"];
	$anexos = $_POST["anexos"];
	list($date, $hora) = explode(" ", $fecha);

	$nuevo = new Memo();
	$registro = $nuevo->registrarMemo($conexion, $date, $de, $para, $motivo, $notas, $anexos, $hora);
	if (isset($registro)) {
		header('Location: ../../vista/memo/vis_lis_memo.php');
	}

	/*$statement = pg_query($conexion, "INSERT INTO memo(
            'date', 'hora', 'motivo', 'notas', 'anexo')
            VALUES (date, hora, motivo, notas, anexo)");
        
	if (!$statement)	{
	//Envia al inicio
	header('Location: ../inicio/inicio.php');
	//Cierra procesos en este controlador
	exit();
	}else{
	echo "error";	
	}
	
	echo "fecha: $fecha";
	echo "<br>";
	echo "motivo: $motivo";
	echo "<br>";
	echo "notas: $notas";
	echo "<br>";
	echo "de: $de";
	echo "<br>";
	echo "para: $para";
	echo "<br>";
	echo "nCasoMemo: $nCasoMemo";
	echo "<br>";
	echo "anexos: $anexos";
	*/

?>