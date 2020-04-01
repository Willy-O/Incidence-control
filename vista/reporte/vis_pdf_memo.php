<?php
include_once'../../mpdf60/mpdf.php';
require_once'../../modelo/conexion.php';
require_once'../../modelo/memo.php';

	$id = (int)$_GET['id'];
	$nuevo = new Memo();
	$result = $nuevo->colsultarMemo($conexion, $id);
    	
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
                <h2 align="center">Memo</h2>
            <table align="center">';
            while($row = pg_fetch_assoc($result))
            {
		$html=$html.'		
		<tr>
                    <td><label>Fecha</label></td>
                    <td><input type="datetime" name="fecha" value="'.$row['date'].'" readonly="readonly"></td>
		</tr>
		<tr>
                    <td><label>De</label></td>
                    <td><input type="text" value="'.$row['de'].'" name="de"></td>
		</tr>
		<tr>
                    <td><label>Para</label></td>
                    <td><input type="text" value="'.$row['para'].'" name="para"></td>
		</tr>
		<tr>
                    <td><label>Señor (A)</label></td>
                    <td><textarea rows="3" cols="47" name="motivo">'.$row['motivo'].'</textarea></td>
		</tr>
		<tr>
                    <td><label>Notas</label></td>
                    <td><input type="text" value="'.$row['notas'].'" name="notas"></td>
		</tr>
		';
	}
	$html=$html.'
		</table>
        </form>
        </div>
    <div class="footer">
        <h5 align="center">Av. Principal de la Floresta cruce con Av. Francisco de Miranda, Edificio, Caracas 1060, Miranda</h5>
    </div>
	</body>
	</html>';

//----------mpdf v5---------
$mpdf=new mPDF();
$mpdf->WriteHTML($html);
$mpdf->Output();