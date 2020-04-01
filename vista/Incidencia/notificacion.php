<?php include "../include/cabecera.php";?>
<?php include "../include/menu_administrador.php";?>

<link rel="stylesheet" type="text/css" href="../../estilos/estilos_formulario.css">

<div class="col-9 col-s-9 menu">
    <div id="content"  align="center" class="content">
	<form id="formulario" action="../../controlador/captura/notificacion.php" method="post"> 
            <h2 align="center">Notificación</h2>
            <table align="center">
                <tr>
                    <td><label>Fecha</label></td>
                       <td><input type="datetime" name="fecha" value="<?php echo date("d-m-Y h-i-a");?>" readonly="readonly"></td>
                </tr>
                <tr>
                    <td><label>Cédula</label></td>
                    <td><input type="text" maxlength="8" name="cedula" placeholder="Ingresar cédula"></td>
                </tr>
                <tr>
                    <td><label>Nombres</label></td>
                    <td><input type="text" maxlength="30" name="nombres" placeholder="Ingresar nombres"></td>
                </tr>
                <tr>
                    <td><label>Apellidos</label></td>
                    <td><input type="text" maxlength="30" name="apellidos" placeholder="Ingresar apellido"></td>
                </tr>
                <tr>
                    <td><label>Teléfono</label></td>
                    <td><input type="text" maxlength="12" name="telefono" placeholder="Ingresar teléfono"></td>
                </tr>
                <tr>
                    <td><label>Sección</label></td>
                    <td><input type="text" maxlength="10" name="seccion" placeholder="Ingresar seccion"></td>
                </tr>
                <tr>
                    <td><label>Trimestre</label></td>
                    <td><select name="trimestre">
                        <option>Trimestre 1</option>
                        <option>Trimestre 2</option>
                        <option>Trimestre 3</option>
                    </select></td>
                </tr>
                <tr>
                    <td><label>Turno</label></td>
                    <td><select name="turno">
                        <option>Mañana</option>
                        <option>Tarde</option>
                        <option>Noche</option>
                    </select></td>
                </tr>
                <tr>
                    <td><label>Motivo</label></td>
                    <td><textarea name="motivo" placeholder="Exposicion del motivo"></textarea></td>
                </tr>
                <tr>
                    <td><label>Respuesta:</label></td>
                    <td><textarea name="respuesta" placeholder="Respuesta a la solicitud"></textarea></td>
                </tr>
                <tr>
                    <td><label>Medidas:</label></td>
                    <td><textarea name="medidas" placeholder="Medidas a tomar"></textarea></td>
                </tr>
                <tr>
                    <td align="center"><input type="submit" value="Guardar"></td>				
                    <td align="center"><input type="reset" value="Limpiar"></td>
                    <td align="center" type="button" onclick="location='/proyecto_cuc/vista/Incidencia/vis_lis_notificacion.php'"><input type="reset" value="Volver"></td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include "../include/pie.php";?>
