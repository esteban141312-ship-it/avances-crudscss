<?php
session_start();
require __DIR__ . '/../../db/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['agregar'])) {
    $nombre = $_POST['nombre'] ?? '';
    $apellido = $_POST['apellido'] ?? '';
    $cedula = $_POST['cedula'] ?? '';
    $correo = $_POST['correo'] ?? '';
    $celular = $_POST['telefono'] ?? '';
    $contraseña = $_POST['contraseña'] ?? '';
    $confirmacion = $_POST['confcontraseña'] ?? '';

    if ($contraseña !== $confirmacion) {
        echo 'Las contraseñas no coinciden.';
    } else {
        $hash = password_hash($contraseña, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (nombre, apellido, contraseña, cedula, correo, celular)
                VALUES ('$nombre', '$apellido', '$hash', '$cedula', '$correo', '$celular')";

        if (mysqli_query($conex, $sql)) {
            header('Location: ../../pag/login.php');
            exit;
        }

        echo 'No se pudo registrar el usuario.';
    }
}

require __DIR__ . '/../../formulario/FormUsuarios.php';
