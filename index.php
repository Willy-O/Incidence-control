<?php session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: vista/control/contenido.php');
}else{
    header('Location: vista/control/login.php');
}

?>