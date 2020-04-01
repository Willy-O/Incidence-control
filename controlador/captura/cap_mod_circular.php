<?php

require_once '../../modelo/conexion.php';
require_once '../../modelo/circular.php';

//if ($_POST)
	$id = (int)$_GET['id'];
	$motivo = $_POST["motivo"];
	$remitente = $_POST["remitente"];
	$notas = $_POST["notas"];
	$anexo = $_POST["anexos"];
	

	$nuevo = new Circular();
	$modificar = $nuevo->modificarCircular($conexion, $id, $motivo, $notas, $anexo, $remitente);
	if (isset($modificar)) {
		header('Location: ../../vista/Circular/vis_lis_circular.php');
	}

/*
	$query = "INSERT INTO circular(date, motivo, notas, anexo, hora) VALUES ('$date', '$motivo', '$notas', '$anexo', '$hora');";
	$result = pg_query($conexion, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());   

	if (!$result) {
		echo "Problemas al cargar los datos";
	}else{
		header('Location: ../Circular/circular.php');
	}
*/
	/*$statement = pg_query($conexion, "INSERT INTO circular(
            'date', 'hora', 'motivo', 'notas', 'anexo')
            VALUES ($date, $hora, $motivo, $notas, $anexo)");
        */
	
	//if (!$statement)	{
	
	//Manda mensaje de error

		/*echo "<script>
                alert('Los datos no se han introducido correctamente');
                window.location.href='../Circular/circular.php';
    	</script>";*/
		
		//header('Location: '../Circular/circular.php');

	/*}else{
		<script>
		alert('Datos introducidos correctamente');
		window.location.href='../Circular/circular.php';
		</script>
		//header('Location: ../inicio/inicio.php');
	}*/

	//Cierra procesos en este controlador
	//exit();
	

	/*
	echo "fecha: $date";
	echo "<br>";
	echo "hora: $hora";
	echo "<br>";
	echo "motivo: $motivo";
	echo "<br>";
	echo "notas: $notas";
	echo "<br>";
	echo "remitente: $remitente";
	echo "<br>";
	echo "nCasoCircular: $nCasoCircular";
	echo "<br>";
	echo "anexos: $anexos";
	*/
?>
