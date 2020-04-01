<?php include "../include/cabecera.php";?>
<?php include "../include/menu_administrador.php";?>

<link rel="stylesheet" type="text/css" href="../../estilos/estilos_formulario.css">

<div class="col-9 col-s-9 menu">
    <div id="content"  align="center" class="content">
	<form id="formulario" action="../../controlador/captura/memo.php" method="post">
            <h2 align="center">Memo</h2>
            <table align="center">
		<tr>
                    <td><label>Fecha</label></td>
                    <td><input type="datetime" name="fecha" value="<?php echo date("d-m-Y h-i-a");?>" readonly="readonly"></td>
		</tr>
		<tr>
                    <td><label>De</label></td>
                    <td><input type="text" name="de"></td>
		</tr>
		<tr>
                    <td><label>Para</label></td>
                    <td><input type="text" name="para"></td>
		</tr>
		<tr>
                    <td><label>Señor (A)</label></td>
                    <td><textarea rows="3" cols="47" name="motivo"></textarea></td>
		</tr>
		<tr>
                    <td><label>Notas</label></td>
                    <td><input type="text" name="notas"></td>
		</tr>
		<tr>
                    <td align="center"><input type="submit" value="Guardar"></td>				
                    <td align="center"><input type="reset" value="Limpiar"></td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php include "../include/pie.php";?>
