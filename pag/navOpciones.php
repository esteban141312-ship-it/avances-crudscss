<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: ../index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú</title>
    <link rel="stylesheet" href="../dist/css/app.css">
</head>
<body>
    <div class="contenedor-crrss">
        <a class="btn-cerrarsesion" href="CerrarSesion.php">Cerrar sesión</a>
    </div>
    <div class="contenedor-btn">
        <a class="btn" href="Users.php">Usuarios</a>
        <a class="btn" href="barcos.php">Barcos</a>
        <a class="btn" href="salidas.php">Salidas</a>
        <a class="btn" href="socios.php">Socios</a>
    </div>
</body>
</html>
