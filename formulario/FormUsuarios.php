<?php
session_start();
?>
<head>
    <meta charset="UTF-8">
    <title>crear usuario</title>
    <link rel="stylesheet" href="../dist/css/style.css">
</head>
<div class="contenedor-todo">
<h1>Agregar Usuario</h1>
<div class="contenedor-form">
<form action="../index.php" method="POST" autocomplete="off">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required><br>

    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" required><br>

    <label for="cedula">Cédula:</label>
    <input type="text" name="cedula" required><br>

    <label for="correo">Correo:</label>
    <input type="email" name="correo" required><br>

    <label for="telefono">Teléfono:</label>
    <input type="text" name="telefono" required><br>

    <label for="contraseña">Contraseña:</label>
    <input type="password" name="contraseña" required><br>

    <label for="confcontraseña">Confirmar Contraseña:</label>
    <input type="password" name="confcontraseña" required><br>

    <input class="btn"type="submit" name="agregar" value="Registrar">
</form>
</div>
<a class="btn-iniciarsesion" href="../pag/login.php">iniciar sesion</a>
</div>
