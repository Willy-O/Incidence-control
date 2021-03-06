<?php

require_once '../../modelo/conexion.php';
require_once '../../modelo/circular.php';

if($_POST['volver']){
        header('Location: ../../vista/Circular/vis_lis_circular.php');
}
	$id = (int)$_GET['id'];

	$nuevo = new Circular();
	$result = $nuevo->consultarCircular($conexion, $id);
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
            <form id="formulario" action="../captura/cap_mod_circular.php?id=<?php echo $id; ?>" method="post"> 
				<div>
                <h2 align="center">Circular</h2>
            <table align="center">
		<tr>
                    <td><label>Fecha</label></td>
                    <td><input type="datetime" name="fecha" value="<?php echo $row['date']; ?>" readonly="readonly"></td>
		</tr>
		<tr>
                    <td><label>Señor (A)</label></td>
                    <td><textarea rows="3" cols="47"  name="motivo"><?php echo $row['motivo']; ?></textarea></td>
		</tr>
                <tr>
                    <td><label>Remitente</label></td>
                    <td><input type="text" name="remitente" value="<?php echo $row['remitente']; ?>"></td>
		</tr>
		<tr>
                    <td><label>Notas</label></td>
                    <td><input type="text" placeholder="notas" name="notas" value="<?php echo $row['notas']; ?>"></td>
		</tr>
		<tr>
                    <td><label>Anexos</label></td>
                    <td><input type="text" placeholder="anexos" name="anexos" value="<?php echo $row['anexo']; ?>" ></td>
		</tr>
		</table>
                <center><input type="submit" value="Modificar"></center>
                <input type="submit" value="Volver">
                </div>
            </form>
            <?php
	            }
            ?>
        </div>
    </div>
<?php include "../../vista/include/pie.php";?>

	
