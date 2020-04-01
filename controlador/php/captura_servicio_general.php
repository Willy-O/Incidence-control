<?php

include("conexion.php");

	$ncaso= $_POST['ncaso'];
	$fecha= $_POST['fecha'];
	$nombre= $_POST['Nombre'];
	$apellido= $_POST['Apellido'];
	$cedula= $_POST['Cedula'];
	$cargo= $_POST['Cargo'];
	$unidad= $_POST['Unidad'];
	$turno= $_POST['turno'];
	$telefono= $_POST['Telefono'];
	$email= $_POST['Email'];
	$trayecto= $_POST['trayecto'];
	$trimestre= $_POST['trimestre'];
	$seccion= $_POST['seccion'];
	$motivo= $_POST['Motivo'];
	$solicitud= $_POST['Solicitud'];
	$medidas= $_POST['Medidas'];
	$recibido= $_POST['Recibido'];

	$query="INSERT INTO servicio_general(ncaso,fecha,nombre,apellido,cedula,cargo,unidad,turno,telefono,email,trayecto,trimestre,seccion,motivo,solictud,medidas,recibido) VALUES('$ncaso','$fecha','$nombre','$apellido','$cedula','$cargo','$unidad','$turno','$telefono','$email','$trayecto','$trimestre','$seccion','$motivo','$solictud','$medidas','$recibido')"
?>