<?php

require_once '../../modelo/conexion.php';
require_once '../../modelo/memo.php';

	$id = (int)$_GET['id'];
	$nuevo = new Memo();
	$result = $nuevo->consultarMemo($id,$conexion);
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
            <form id="formulario" action="../captura/cap_mod_memo.php?id=<?php echo $id; ?>" method="post"> 
				<div>
                <h2 align="center">Circular</h2>
                <table align="center">
		<tr>
                    <td><label>Fecha</label></td>
                    <td><input type="datetime" name="fecha" value="<?php echo $row['date']; ?>" readonly="readonly"></td>
		</tr>
		<tr>
                    <td><label>De</label></td>
                    <td><input type="text" name="de" value="<?php echo $row['de']; ?>"></td>
		</tr>
		<tr>
                    <td><label>Para</label></td>
                    <td><input type="text" name="para" value="<?php echo $row['para']; ?>"></td>
		</tr>
		<tr>
                    <td><label>Señor (A)</label></td>
                    <td><textarea rows="3" cols="47" name="motivo"><?php echo $row['motivo']; ?></textarea></td>
		</tr>
		<tr>
                    <td><label>Notas</label></td>
                    <td><input type="text" name="notas" value="<?php echo $row['notas']; ?>"></td>
		</tr>
            </table>
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

	
