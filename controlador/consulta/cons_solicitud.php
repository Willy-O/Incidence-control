<?php

require_once '../../modelo/conexion.php';
require_once '../../modelo/solicitud.php';

	$id = (int)$_GET['id'];
	$nuevo = new Solicitud();
	$result = $nuevo->colsultarSolicitud($conexion, $id);
?>
<?php include "../../vista/include/cabecera.php";?>
<?php include "../../vista/include/menu_administrador.php";?>
<link rel="stylesheet" type="text/css" href="../../estilos/estilos_formulario.css">
<div class="col-9 col-s-9 menu">
    <div id="content"  align="center" class="content">
	<form id="formulario" action="../../vista/Incidencia/vis_lis_solicitud.php" method="post" align="justify">   
		<?php
            while($row = pg_fetch_assoc($result))
            {
        ?>
	    <h1 align="center">Solicitud</h1>
            <table align="center">
		<tr>
                    <td><label>Fecha</label></td>
                       <td><input type="datetime" name="fecha" value="<?php echo $row['date']; ?>" readonly="readonly"></td>
        </tr>
		<tr>
                    <td><label>Cédula</label></td>
                    <td><input type="text" readonly="readonly" value="<?php echo $row['cedula']; ?>" ></td>
		</tr>
		<tr>
                    <td><label>Nombres</label></td>
                    <td><input type="text" value="<?php echo $row['nombre1']; ?>" readonly="readonly"></td>
		</tr>
		<tr>
                    <td><label>Apellidos</label></td>
                    <td><input type="text" value="<?php echo $row['apellido1']; ?>" readonly="readonly"></td>
		</tr>
		<tr>
                    <td><label>Teléfono</label></td>
                    <td><input type="text" value="<?php echo $row['telefono']; ?>" readonly="readonly"></td>
		</tr>
		<tr>
                    <td><label>Correo</label></td>
                    <td><input type="text" value="<?php echo $row['correo']; ?>" readonly="readonly"></td>
		</tr>
		<tr>
                    <td><label>Sección</label></td>
                    <td><input type="text" value="<?php echo $row['seccion']; ?>" readonly="readonly"></td>
      </tr>
	   <tr>
                    <td><label>Trimestre</label></td>
					<td><input type="text" value="<?php echo $row['trimestre']; ?>" readonly="readonly"></td>
      </tr>
		<tr>
                    <td><label>Turno</label></td>
                    <td><input type="text" value="<?php echo $row['turno']; ?>" readonly="readonly"></td>
		</tr>
		<tr>
                    <td><label>Motivo</label></td>
                    <td><textarea  name="motivo"  readonly="readonly"><?php echo $row['motivo']; ?></textarea></td>
		</tr>
                <tr>
                    <td><label>Respuesta</label></td>
                    <td><textarea  name="respuesta"  readonly="readonly"><?php echo $row['respuesta']; ?></textarea></td>
                </tr>					

        </table>
             <?php
	            }
            ?>
                     <center><input type="submit" value="Volver"></center>
        </form>
    </div>     
</div>
</div>
<?php include "../../vista/include/pie.php";?>
