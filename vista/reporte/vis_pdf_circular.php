<?php
require_once'../../modelo/conexion.php';
require_once'../../modelo/circular.php';
include_once'../../mpdf60/mpdf.php';


	$id = (int)$_GET['id'];
	$nuevo = new Circular();
	$result = $nuevo->consultarCircular($conexion, $id);
    	
$html ='<html>
		<head>
			<link rel="stylesheet" type="text/css" href="../estilos/estilos_pdf.css">
			<title>UNEXCA - Colegio Univesitario de Caracas</title>
		</head>
		<div class="header">
			<h1 align="center">Nucleo Colegio universitario de Caracas - La Floresta</h1>
		</div>
		<body>
			<div id="content"  align="center" class="content">
			<form id="formulario"">
				<h2 align="center">Circular</h2>
			<table align="center">';

            while($row = pg_fetch_assoc($result))
            {
		$html=$html.'		
		<tr>
                    <td><label>Fecha</label></td>
                    <td><input type="datetime" name="fecha" value="'.$row['date'].'" readonly="readonly"></td>
		</tr>
		
		<tr>
                    <td><label>Señor (A)</label></td>
                    <td><textarea rows="3" cols="47" readonly="readonly" name="motivo">'.$row['motivo'].'</textarea></td>
		</tr>
                <tr>
                    <td><label>Remitente</label></td>
                    <td><input type="text" name="remitente" value="'.$row['remitente'].'" readonly="readonly"></td>
		</tr>
		<tr>
                    <td><label>Notas</label></td>
                    <td><input type="text" placeholder="notas" name="notas" value="'. $row['notas'].'" readonly="readonly"></td>
		</tr>
		<tr>
                    <td><label>Anexos</label></td>
                    <td><input type="text" placeholder="anexos" name="anexos" value="'.$row['anexo'].'" readonly="readonly"></td>
		</tr>
		';
	}
	$html=$html.'
		</table>
                </div>
            </form>
	</body>
	</html>';

//----------mpdf v5---------
$mpdf=new mPDF();
$mpdf->WriteHTML($html);
$mpdf->Output();