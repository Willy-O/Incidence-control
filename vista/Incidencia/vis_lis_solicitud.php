<?php include "../include/cabecera.php";?>
<?php include "../include/menu_administrador.php";?>
<?php require_once('../../controlador/listar/lis_solicitud.php'); ?>
<link rel="stylesheet" type="text/css" href="../../estilos/estilos_listar.css">
<script src="../../js/fontawesome-all.js"></script>
<script src="../../js/all.js"></script>
<form id="listado" action="solicitud.php" method="post"> 
    <h1>Solicitudes</h1>
<div class="listar">
<table>
<thead>
<tr>
	<th>Fecha</th>
    <th>Cedula</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Sección</th>
    <th>Trimestre</th>
	<th>Motivo</th>
    <th>Respuesta</th>
    <th>Opciones</th>
</tr>
</thead>
<tbody>
<?php
	while($row = pg_fetch_assoc($result))
	{
?>
<tr>

<td><?php echo $row['date']; ?></td>
<td><?php echo $row['cedula']; ?></td>
<td><?php echo $row['nombre1']; ?></td>
<td><?php echo $row['apellido1']; ?></td>
<td><?php echo $row['seccion']; ?></td>
<td><?php echo $row['trimestre']; ?></td>
<td><?php echo $row['motivo']; ?></td>
<td><?php echo $row['respuesta']; ?></td>
<td> 
    <ACRONYM title="Eliminar"><a href="../../controlador/elimina/eli_solicitud.php?id=<?php echo $row['id']; ?>"><i class="icono fas fa-trash-alt"></i></a></ACRONYM>
    <ACRONYM title="Consultar"><a href="../../controlador/consulta/cons_solicitud.php?id=<?php echo $row['id']; ?>"><i class="icono fas fa-search"></i></a></ACRONYM>
    <ACRONYM title="Editar"><a href="../../controlador/modifica/mod_solicitud.php?id=<?php echo $row['id']; ?>"><i class="icono far fa-edit"></i></i></a></ACRONYM>
    <ACRONYM title="Crear PDF"><a href="../../pdf_creator/pdf_solicitud.php?id=<?php echo $row['id']; ?>"><i class="icono fas fa-file-pdf"></i></a></ACRONYM>
</td>
</tr>	
<?php
	}
?>
</body>
</table>
<center><input type="submit" value="Crear nueva solicitud"></center>
</div>

</form>
<?php include "../include/pie.php";?>
