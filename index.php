<?php
session_start();

// La portada dirige al visitante sin incluir otra página: de ese modo PHP
// puede enviar correctamente las cabeceras de redirección.
if (isset($_SESSION['usuario'])) {
    header('Location: pag/navOpciones.php');
} else {
    header('Location: pag/login.php');
}
exit;
