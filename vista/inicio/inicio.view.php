<?php include "../include/cabecera.php";?>
<?php include "../include/menu_administrador.php";?>
<?php include "../../modelo/conexion.php";?>
<?php include "../../modelo/entrada.php";?>

<link rel="stylesheet" type="text/css" href="../../estilos/estilos_formulario.css">

<div class="col-9 col-s-9 menu">
    <div id="content"  align="center" class="content">
	<form id="formulario" action="../captura/circular.php" method="post">
            <h2 align="center">Inicio</h2>
            <br>
            <br>
            <label>Notificaciones realizadas:
			<?php 	
                $nuevo = new Entrada();
                $result = $nuevo->totalNotificacion($conexion);
				$row = pg_fetch_assoc($result);
			  	echo $row["total_respuestan"]; 					
			?>	
			</label>
            <br>
            <br>
            <label>Notificaciones sin responder: 
			<?php 	
                $nuevo = new Entrada();
                $result = $nuevo->noRespuestaNotificacion($conexion);
				$row = pg_fetch_assoc($result);
			  	echo $row["total_norespuestan"]; 					
			?>	
			</label>
            <br>
            <br>
            <label>Solicitudes realizadas:
			<?php 	
                $nuevo = new Entrada();
                $result = $nuevo->totalSolicitud($conexion);
				$row = pg_fetch_assoc($result);
			  	echo $row["total_respuestas"]; 					
			?>
			</label>
            <br>
			<br>
            <label>Solicitudes sin responder:
			<?php 	
                $nuevo = new Entrada();
                $result = $nuevo->noRespuestaSolicitud($conexion);
				$row = pg_fetch_assoc($result);
			  	echo $row["total_norespuestas"]; 					
			?>
			</label>
            <br>
			<br>
            <label>Memos realizados:
			<?php 	
                $nuevo = new Entrada();
                $result = $nuevo->totalMemo($conexion);
				$row = pg_fetch_assoc($result);
			  	echo $row["total_memo"]; 					
			?>
			</label>
            <br>
			<br>
            </label>
            <label>Circulares realizadas:
			<?php 	
                $nuevo = new Entrada();
                $result = $nuevo->totalCircular($conexion);
				$row = pg_fetch_assoc($result);
			  	echo $row["total_circular"]; 					
			?>
			</label>
			<?php
            #<br>
            #<label>Comunicados realizados:</label>
            #<br>
            #<br>
            #<label>Inasistencias por justificar:</label>
			?>
    	</form>
    </div>
</div>
<?php include "../include/pie.php";?>
