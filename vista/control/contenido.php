<?php session_start();
require_once 'funciones.php';

if (isset($_SESSION['usuario'])) {
    Vista('inicio');
}else{
    header('Location: login.php');
}

?>