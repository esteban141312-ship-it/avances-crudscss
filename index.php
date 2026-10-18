<?php
session_start();

//si inicia sesion al login, si hay sesion iniciar, va ala barra de opciones
if (isset($_SESSION['usuario'])) {
    header('Location: pag/navOpciones.php');
} else {
    header('Location: pag/login.php');
}
exit;
