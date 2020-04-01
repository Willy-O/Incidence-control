<!DOCTYPE HTML>
<html lang="es">
	<head>
	<?php include "../include/cabecera.php";?>
	<?php include "../include/menu_administrador.php";?>
	<?php require_once "../consulta/cons_circular.php";?>

		<meta charset="UTF-8" />
		<style type="text/css">
		
			.content {
			    padding: 2%;
			    margin: 2%;
			    text-align: justify;
			    font-size: 16px;
			    box-shadow: 0 0 1px 1px black;
			    height: 100%;
			    width: 100%;
			}

			img{
				position: center;
			}

			table{
			    align: center;
			    width: 100%;
			}

			label {
			    font-weight: bold;
			    color: #444;
			    font-size: 14px;
			    width: 100%;
			}

			p {
			    font-weight: bold;
			    color: #444;
			    font-size: 14px;
			    width: 100%;
			}

			input {
			    font-size: 14px;
			    padding: 1px 20px;
			}

			select  {
			    font-size: 14px;
			    border-radius: 5px;
			    background: #fff;
			    border: 1px solid #ccc;
			    outline: none;
			    width: 100%;
			    background-color:transparent;
			    padding: 1px 20px;
			}

			textarea{
			    border-radius: 5px;
			    background: #fff;
			    border: 1px solid #ccc;
			    background-color:transparent;
			    outline: none;
				width: 100%;
			    resize: vertical;
				max-height:300px;
				min-height: 100px;
			    padding: 1px 20px;
			   
			    font-size: 14px;
			}
		
		</style>
	</head>
	<div id="content"  align="center" class="content">
    <?php
        while($row = pg_fetch_assoc($result))
        {
    ?>
	<form id="formulario" action="../circular/vis_lis_circular.php" method="post">
            <h2 align="center">Circular</h2>
            <table align="center">
		<tr>
                    <td><label>Fecha</label></td>
                    <td><input type="datetime" name="fecha" value="<?php echo $row['date']; ?>" readonly="readonly"></td>
		</tr>
		<tr>
                    <td><label>Señor (a)</label></td>
                    <td><textarea rows="3" cols="47" value="<?php echo $row['motivo']; ?>"  name="motivo"></textarea></td>
		</tr>
                <tr>
                    <td><label>Remitente</label></td>
                    <td><input type="text" value="<?php echo $row['remitente']; ?>" name="remitente"></td>
		</tr>
		<tr>
                    <td><label>Notas</label></td>
                    <td><input type="text" value="<?php echo $row['notas']; ?>" name="notas"></td>
		</tr>
		<tr>
                    <td><label>Anexos</label></td>
                    <td><input type="text" value="<?php echo $row['anexo']; ?>" name="anexos"></td>
		</tr>				

            </table>
            <td align="center"><input type="submit" value="Volver"></td>
        </form>
        <?php
	        }
        ?>
    </div>

<?php include "../include/pie.php";?>















