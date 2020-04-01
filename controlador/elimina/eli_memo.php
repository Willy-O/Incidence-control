<?php

require_once '../../modelo/conexion.php';
require_once '../../modelo/memo.php';

	$id = $_GET['id'];
	$nuevo = new Memo();
	$consultar = $nuevo->borrarMemo($id, $conexion);
	if (isset($consultar)) {
		header('Location: ../../vista/memo/vis_lis_memo.php');
	}


