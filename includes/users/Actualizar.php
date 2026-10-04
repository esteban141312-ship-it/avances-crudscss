<?php

require "../../db/conexion.php";

$id = $_POST['id'];

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$contraseña = $_POST['contraseña'];
$confcontraseña = $_POST['confcontraseña'];

if ($nombre == "" || $apellido == "" || $cedula == "" || $correo == "" || $telefono == "" || $contraseña == "" || $confcontraseña == "") {

    echo "Debe llenar todos los campos";

} elseif ($contraseña != $confcontraseña) {

    echo "Las contraseñas no coinciden";

} else {

    $sql = "UPDATE usuarios SET 
            nombre = '$nombre',
            apellido = '$apellido',
            cedula = '$cedula',
            correo = '$correo',
            celular = '$telefono',
            contraseña = '$contraseña'
            WHERE id = '$id'";

    $resultado = mysqli_query($conex, $sql);

    if ($resultado) {
        echo "Usuario actualizado correctamente";
    } else {
        echo "Error al actualizar: ";
    }
}

?>

 <a href="../../pag/Users.php">Ir a los usuarios</a>