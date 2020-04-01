<?php

require_once '../../modelo/conexion.php';
require_once '../../modelo/memo.php';

//if ($_POST)
	$id = (int)$_GET['id'];
	$de = $_POST["de"];
	$para = $_POST["para"];
	$motivo = $_POST["motivo"];
	$notas = $_POST["notas"];

	$nuevo = new Memo();
	$modificar = $nuevo->modificarMemo($conexion, $id, $de, $para, $motivo, $notas);
	if (isset($modificar)) {
		header('Location: ../../vista/memo/vis_lis_memo.php');
	}