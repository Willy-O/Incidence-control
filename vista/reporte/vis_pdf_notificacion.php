<?php
include_once'../../mpdf60/mpdf.php';
require_once'../../modelo/conexion.php';
require_once'../../modelo/notificacion.php';

	$id = (int)$_GET['id'];
	$nuevo = new Notificacion();
	$result = $nuevo->colsultarNotificacion($conexion, $id);
    	
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
                <h2 align="center">Notificacion</h2>
            <table align="center">';
            while($row = pg_fetch_assoc($result))
            {
		$html=$html.'		
        <tr>
        <td><label>Fecha</label></td>
            <td><input type="datetime" name="fecha" value="'.$row['date'].'" readonly="readonly"></td>
        </tr>
        <tr>
            <td><label>Cédula</label></td>
            <td><input type="text" maxlength="8" name="cedula" value="'.$row['cedula'].'" readonly="readonly"></td>
        </tr>
        <tr>
            <td><label>Nombres</label></td>
            <td><input type="text" maxlength="30" name="nombres" value="'.$row['nombre1'].'," ",'.$row['nombre2'].'" readonly="readonly"></td>
        </tr>
        <tr>
            <td><label>Apellidos</label></td>
            <td><input type="text" maxlength="30" name="apellidos" value="'.$row['apellido1'].', " ",'.$row['apellido2'].'" readonly="readonly"></td>
        </tr>
        <tr>
            <td><label>Teléfono</label></td>
            <td><input type="text" maxlength="12" name="telefono" value="'.$row['telefono'].'" readonly="readonly"></td>
        </tr>
        <tr>
            <td><label>Sección</label></td>
            <td><input type="text" maxlength="10" name="seccion" value="'.$row['seccion'].'" readonly="readonly"></td>
        </tr>
        <tr>
            <td><label>Trimestre</label></td>
            <td><input type="text" maxlength="10" name="trimestre" value='.$row['trimestre'].'" readonly="readonly"></td>
        </tr>
        <tr>
            <td><label>Turno</label></td>
            <td><input type="text" maxlength="10" name="turno" value="'.$row['turno'].'" readonly="readonly"></td>
        </tr>
        <tr>
            <td><label>Motivo</label></td>
            <td><textarea name="motivo" value="" readonly="readonly">'.$row['motivo'].'</textarea></td>
        </tr>
        <tr>
            <td><label>Respuesta:</label></td>
            <td><textarea name="respuesta"  readonly="readonly">'.$row['respuesta'].'</textarea></td>
        </tr>
        <tr>
            <td><label>Medidas:</label></td>
            <td><textarea name="medidas" readonly="readonly">'.$row['medidas'].'</textarea></td>
        </tr>
		';
	}
	$html=$html.'
		</table>
        </div>
        </form>
        <div class="footer">
            <h5 align="center">Av. Principal de la Floresta cruce con Av. Francisco de Miranda, Edificio, Caracas 1060, Miranda</h5>
        </div>
	</body>
	</html>';

//----------mpdf v5---------
$mpdf=new mPDF();
$mpdf->WriteHTML($html);
$mpdf->Output();