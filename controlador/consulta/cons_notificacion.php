<?php

require_once '../../modelo/conexion.php';
require_once '../../modelo/notificacion.php';

	$id = (int)$_GET['id'];
	$nuevo = new Notificacion();
	$result = $nuevo->colsultarNotificacion($conexion, $id);
?>
	 <?php include "../../vista/include/cabecera.php";?>
    <?php include "../../vista/include/menu_administrador.php";?>
    
    <link rel="stylesheet" type="text/css" href="../../estilos/estilos_formulario.css">
   
    <div class="col-9 col-s-9 menu">
        <div id="content"  align="center" class="content">
        <?php
            while($row = pg_fetch_assoc($result))
            {
        ?>
            <form id="formulario" action="../../vista/Incidencia/vis_lis_notificacion.php" method="post"> 
				<div>
                <h2 align="center">Notificación</h2>
                <table align="center">
                    <tr>
                        <td><label>Fecha</label></td>
                           <td><input type="datetime" name="fecha" value="<?php echo $row['date']; ?>" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td><label>Cédula</label></td>
                        <td><input type="text" maxlength="8" name="cedula" value="<?php echo $row['cedula']; ?>" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td><label>Nombres</label></td>
                        <td><input type="text" maxlength="30" name="nombres" value="<?php echo $row['nombre1']," ",$row['nombre2'] ; ?>" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td><label>Apellidos</label></td>
                        <td><input type="text" maxlength="30" name="apellidos" value="<?php echo $row['apellido1'], " ", $row['apellido2']; ?>" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td><label>Teléfono</label></td>
                        <td><input type="text" maxlength="12" name="telefono" value="<?php echo $row['telefono']; ?>" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td><label>Sección</label></td>
                        <td><input type="text" maxlength="10" name="seccion" value="<?php echo $row['seccion']; ?>" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td><label>Trimestre</label></td>
                        <td><input type="text" maxlength="10" name="trimestre" value="<?php echo $row['trimestre']; ?>" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td><label>Turno</label></td>
                        <td><input type="text" maxlength="10" name="turno" value="<?php echo $row['turno']; ?>" readonly="readonly"></td>
                    </tr>
                    <tr>
                        <td><label>Motivo</label></td>
                        <td><textarea name="motivo" value="" readonly="readonly"><?php echo $row['motivo']; ?></textarea></td>
                    </tr>
                    <tr>
                        <td><label>Respuesta:</label></td>
                        <td><textarea name="respuesta"  readonly="readonly"><?php echo $row['respuesta']; ?></textarea></td>
                    </tr>
                    <tr>
                        <td><label>Medidas:</label></td>
                        <td><textarea name="medidas" readonly="readonly"><?php echo $row['medidas']; ?> </textarea></td>
                    </tr>
                </table>
                <center><input type="submit" value="Volver"></center>
                </div>
            </form>
            <?php
	            }
            ?>
        </div>
    </div>
<?php include "../../vista/include/pie.php";?>

	
