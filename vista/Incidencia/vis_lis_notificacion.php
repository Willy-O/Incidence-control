<?php include "../include/cabecera.php";?>
<?php include "../include/menu_administrador.php";?>
<?php require_once('../../controlador/listar/lis_notificacion.php'); ?>
<link rel="stylesheet" type="text/css" href="../../estilos/estilos_listar.css">
<script src="../../js/fontawesome-all.js"></script>
<script src="../../js/all.js"></script>
<form id="listado" action="notificacion.php" method="post"> 

    <h1>Notificaciones</h1>
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
    <th>Medidas</th>
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
<td><?php echo $row['apellido1'] ?></td>
<td><?php echo $row['seccion']; ?></td>
<td><?php echo $row['trimestre']; ?></td>
<td class="text"><?php echo $row['motivo']; ?></td>
<td class="text"><?php echo $row['respuesta']; ?></td>
<td class="text"><?php echo $row['medidas']; ?></td>	
<td> 
    <ACRONYM title="Eliminar"><a href="../../controlador/elimina/eli_notificacion.php?id=<?php echo $row['id']; ?>"><i class="icono fas fa-trash-alt"></i></a></ACRONYM>
    <ACRONYM title="Consultar"><a href="../../controlador/consulta/cons_notificacion.php?id=<?php echo $row['id']; ?>"><i class="icono fas fa-search"></i></a></ACRONYM>
    <ACRONYM title="Editar"><a href="../../controlador/modifica/mod_notificacion.php?id=<?php echo $row['id']; ?>"><i class="icono far fa-edit"></i></i></a></ACRONYM>
    <ACRONYM title="Crear PDF"><a href="../../pdf_creator/pdf_notificacion.php?id=<?php echo $row['id']; ?>"><i class="icono fas fa-file-pdf"></i></a></ACRONYM>
</td>	
</tr>	
<?php
	}
?>
</tbody>
</table>
<center><input type="submit" value="Crear nueva notificacion"></center>
</div>

</form>
<?php include "../include/pie.php";?>
