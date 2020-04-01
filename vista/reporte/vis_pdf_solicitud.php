<?php
include_once'../../mpdf60/mpdf.php';
require_once'../../modelo/conexion.php';
require_once'../../modelo/solicitud.php';

	$id = (int)$_GET['id'];
	$nuevo = new Solicitud();
	$result = $nuevo->colsultarSolicitud($conexion, $id);
    	
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
                <h2 align="center">Solicitud</h2>
            <table align="center">';
            while($row = pg_fetch_assoc($result))
            {
		$html=$html.'		
        <tr>
            <td><label>Fecha</label></td>
            <td><input type="datetime" name="fecha" value='.$row['date'].'" readonly="readonly"></td>
        </tr>
		<tr>
            <td><label>Cédula</label></td>
            <td><input type="text" readonly="readonly" value="'.$row['cedula'].'" ></td>
		</tr>
		<tr>
            <td><label>Nombres</label></td>
            <td><input type="text" value="'.$row['nombre1'].'," ",'.$row['nombre2'].'" readonly="readonly"></td>
		</tr>
		<tr>
            <td><label>Apellidos</label></td>
            <td><input type="text" value="'.$row['apellido1'].'," ",'.$row['apellido2'].'" readonly="readonly"></td>
		</tr>
		<tr>
            <td><label>Teléfono</label></td>
            <td><input type="text" value="'.$row['telefono'].'" readonly="readonly"></td>
		</tr>
		<tr>
            <td><label>Correo</label></td>
            <td><input type="text" value="'.$row['correo'].'" readonly="readonly"></td>
		</tr>
		<tr>
            <td><label>Sección</label></td>
            <td><input type="text" value="'.$row['seccion'].'" readonly="readonly"></td>
       </tr>
	   <tr>
            <td><label>Trimestre</label></td>
            <td><input type="text" value="'.$row['trimestre'].'" readonly="readonly"></td>
        </tr>
		<tr>
            <td><label>Turno</label></td>
            <td><input type="text" value="'.$row['turno'].'" readonly="readonly"></td>
		</tr>
		<tr>
            <td><label>Motivo</label></td>
            <td><textarea  name="motivo"  readonly="readonly"'.$row['motivo'].'</textarea></td>
		</tr>
        <tr>
            <td><label>Respuesta</label></td>
            <td><textarea  name="respuesta"  readonly="readonly">'.$row['respuesta'].'</textarea></td>
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