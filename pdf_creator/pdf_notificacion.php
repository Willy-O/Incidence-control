<?php
require_once'../modelo/conexion.php';
require_once'../modelo/notificacion.php';
//require_once('../mpdf-6.0.0/mpdf.php');
	$id = (int)$_GET['id'];
	$nuevo = new Notificacion();
	$result = $nuevo->colsultarNotificacion($conexion, $id);
if (!$result){
	echo "ocurrio un error.\n";
exit;}
	$row[] = pg_fetch_assoc($result);
$html= '
	<style>
	h1{font-size: 30px; color:#444; margin-top: 50px; text-align: center;}
	label {font-weight: bold; color: #444; font-size: 16px; width: 15%; text-align: justify;}
	input {font-size: 14px; padding: 1px 20px; width: 70%; margin-bottom: 10px; margin-left: 20px; border:none; text-align: justify;}
	.hh {width: 85%; text-aling: justify;}
	.ww {text-aling: center; margin-left: 50px;}
	</style>
	<header class="header">
	<div id="logo">
	<img src="../Imagenes/encabezado_pnf.png">
	</div>
	<h1>NOTIFICACION</h1><hr>
	</header>
	<main>
	<table align="center">';
foreach ($row as $rows) {
$html .='<tr>
	 	<td><label>Fecha</label></td>
	 	<td class="hh">'.$rows['date'].'</td>
	</tr>
	<tr>
	 	<td><label>Hora</label></td>
	 	<td class="hh">'.$rows['hora'].'</td>
	</tr>
	<tr>
		<td><label>Cédula</label></td>
		<td class="hh">'.$rows['cedula'].'</td>
	</tr>
	<tr>
		<td><label>Nombres</label></td>
		<td class="hh">'.$rows['nombre1'].'</td>
	</tr>
	<tr>
		<td><label>Apellidos</label></td>
		<td class="hh">'.$rows['apellido1'].'</td>
	</tr>
	<tr>
		<td><label>Teléfono</label></td>
		<td class="hh">'.$rows['telefono'].'</td>
	</tr>
	<tr>
		<td><label>Sección</label></td>
		<td class="hh">'.$rows['seccion'].'</td>
	</tr>
	<tr>
		<td><label>Trimestre</label></td>
		<td class="hh">'.$rows['trimestre'].'</td>
	</tr>
	<tr>
		<td><label>Turno</label></td>
		<td class="hh">'.$rows['turno'].'</td>
	</tr>
	<tr>
		<td><label>Motivo</label></td>
		<td class="hh">'.$rows['motivo'].'</td>
	</tr>
	<tr>
		<td><label>Respuesta:</label></td>
		<td class="hh">'.$rows['respuesta'].'</td>
	</tr>
	<tr>
		<td><label>Medidas:</label></td>
		<td class="hh">'.$rows['medidas'].'</td>
	</tr>';
	}
$html .='</table>
	<br>
	<br>
	<br>
	<br>
	<label class="ll">Emitido por:</label>
	<br>
	<label class="ll">Cargo:</label>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<label class="ww">Firma:</label>
	</main>';

$path = (getenv('MPDF_ROOT')) ? getenv('MPDF_ROOT') : __DIR__;
include '../mpdf/autoload.php';
$mpdf = new \Mpdf\Mpdf(['mode' => 'c']);
$mpdf->WriteHTML($html);
$mpdf->Output();


//	$mpdf = new mPDF('c', 'A4');
//	$mpdf->writeHTML($html);
//	$mpdf->Output('reporte.pdf', 'I');
?>