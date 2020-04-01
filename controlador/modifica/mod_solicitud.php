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
        <?php
            while($row = pg_fetch_assoc($result))
            {
        ?>
            <form id="formulario" action="../captura/cap_mod_solicitud.php?id=<?php echo $id; ?>" method="post"> 
				<div>
                <h2 align="center">Modifica</h2>
                <table align="center">
                <tr>
                            <td><label>Fecha</label></td>
                            <td><input type="datetime" name="fecha" value="<?php echo $row['date']; ?>" readonly="readonly"></td>
                </tr>
                <tr>
                            <td><label>Cédula</label></td>
                            <td><input type="text" name="cedula" value="<?php echo $row['cedula']; ?>" ></td>
                </tr>
                <tr>
                            <td><label>Nombres</label></td>
                            <td><input type="text" name="nombres" value="<?php echo $row['nombre1']," ",$row['nombre2']; ?>"></td>
                </tr>
                <tr>
                            <td><label>Apellidos</label></td>
                            <td><input type="text" name="apellidos" value="<?php echo $row['apellido1']," ",$row['apellido2']; ?>"></td>
                </tr>
                <tr>
                            <td><label>Teléfono</label></td>
                            <td><input type="text" name="telefono" value="<?php echo $row['telefono']; ?>"></td>
                </tr>
                <tr>
                            <td><label>Correo</label></td>
                            <td><input type="text" name="correo" value="<?php echo $row['correo']; ?>"></td>
                </tr>
                <tr>
                            <td><label>Sección</label></td>
                            <td><input type="text" name="seccion" value="<?php echo $row['seccion']; ?>"></td>
            </tr>
            <tr>
                            <td><label>Trimestre</label></td>
                            <td><input type="text" name="trimestre" value="<?php echo $row['trimestre']; ?>"></td>
            </tr>
                <tr>
                            <td><label>Turno</label></td>
                            <td><input type="text"  name="turno" value="<?php echo $row['turno']; ?>"></td>
                </tr>
                <tr>
                            <td><label>Motivo</label></td>
                            <td><textarea  name="motivo"><?php echo $row['motivo']; ?></textarea></td>
                </tr>
                        <tr>
                            <td><label>Respuesta</label></td>
                            <td><textarea  name="respuesta"><?php echo $row['respuesta']; ?></textarea></td>
                        </tr>					

        </table>
                <center><input type="submit" value="Modificar"></center>
                </div>
            </form>
            <?php
	            }
            ?>
        </div>
    </div>
<?php include "../../vista/include/pie.php";?>