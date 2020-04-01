<?php 

    function limpiarDatosNoMayus($datos){
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    $datos = filter_var(strtolower($datos), FILTER_SANITIZE_STRING);
    return $datos;
}

function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

function Vista($archivo){
   $ruta = require_once '../vista/'.$archivo.'.view.php';
   return $ruta;
}

function VerificarSession(){
    session_start();
    if (isset($_SESSION['usuario'])) {
        header('Location: ../index.php');
    }
    }

    function CrearPDF($contenido){
        
        $html2pdf = new Html2Pdf('L', 'A4', 'es', true, 'UTF-8');
        $html2pdf->writeHTML($contenido);
        $html2pdf->output('pdf_generado.pdf');
    }
?>