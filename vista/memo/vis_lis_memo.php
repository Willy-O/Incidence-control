<?php include "../include/cabecera.php";?>
<?php include "../include/menu_administrador.php";?>
<?php require_once('../../controlador/listar/lis_memo.php'); ?>
<link rel="stylesheet" type="text/css" href="../../estilos/estilos_listar.css">
<script src="../../js/fontawesome-all.js"></script>
<script src="../../js/all.js"></script>
<form id="listado" action="memo.php" method="post"> 

    <h1>Memos</h1>
<div class="listar">
<table>
<thead>
<tr>
	<th>Fecha</th>
	<th>De</th>
    <th>Para</th>
	<th>Motivo</th>
	<th>Notas</th>
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
<td><?php echo $row['de']; ?></td>
<td><?php echo $row['para']; ?></td>
<td><?php echo $row['motivo']; ?></td>
<td><?php echo $row['notas']; ?></td>
<td> 
	<ACRONYM title="Eliminar"><a href="../../controlador/elimina/eli_memo.php?id=<?php echo $row['id']; ?>"><i class="icono fas fa-trash-alt"></i></a></ACRONYM>
    <ACRONYM title="Consultar"><a href="../../controlador/consulta/cons_memo.php?id=<?php echo $row['id']; ?>"><i class="icono fas fa-search"></i></a></ACRONYM>
    <ACRONYM title="Editar"><a href="../../controlador/modifica/mod_memo.php?id=<?php echo $row['id']; ?>"><i class="icono far fa-edit"></i></i></a></ACRONYM>
    <ACRONYM title="Crear PDF"><a href="../../pdf_creator/pdf_memo.php?id=<?php echo $row['id']; ?>"><i class="icono fas fa-file-pdf"></i></a></ACRONYM>

</td>		
</tr>	
<?php
	}
?>
</body>
</table>
<center><input type="submit" value="Crear nuevo memo"></center>
</div>

</form>
<?php include "../include/pie.php";?>