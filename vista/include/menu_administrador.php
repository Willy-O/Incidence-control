<link rel="stylesheet" type="text/css" href="../../estilos/estilo_menu.css">
<div class="col-3 col-s-3 menu">
    <div>
        <img src="../../Imagenes/LOGO-PNFA.jpg" width="80%" alt="CUC"/>
    </div> 
    <nav id="menu" class="navigation">
        <ul id="mainmenu" class="mainmenu">
        		<li>
            <div class="link"><a href="../inicio/inicio.view.php">Inicio</a></div>
            </li>
            <li>
            	<div class="link">Incidencias</div>
                	<ul class="submenu">
                   	<li><a href="../Incidencia/vis_lis_notificacion.php">Notificación</a></li>
							<li><a href="../Incidencia/vis_lis_solicitud.php">Solicitud</a></li>               	
               	</ul> 
            </li>
            <li>
            	<div class="link">Comunicaciones</div>
                	<ul class="submenu">
                   	<li><a href="../Circular/vis_lis_circular.php">Circular</a></li>
                  	<li><a href="../memo/vis_lis_memo.php">Memo</a></li>
                 	</ul> 
            </li>
            <?php
            /* 
            <li>
            	<div class="link"><a href="../control/controlAsistencia.php">Control de asistencia</a></div>
            </li>
            <li>
           		<div class="link"><a href="../control/controlInasistencia.php">Control de inasistencia</a></div>
            </li>
            <li>
            	<div class="link"><a href="#">Estadísticas</a></div>
            </li>
            */
            ?>
            <li>
                <div class="link"><a href="../control/out.php" class="out">Cerrar Sesion</a></div>
            </li>
        </ul>
    </nav>
    <script src="../../js/jquery.min.js"></script>
	 <script src="../../js/main.js"></script>
</div>
