<?php
require __DIR__ . "/../db/conexion.php";

// require "../includes/users/EliminarUs.php";
// var_dump($idlim);
function create_user($conex) {
    if (isset($_POST['agregar'])) {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $cedula = $_POST['cedula'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $contraseña = $_POST['contraseña'];
        $confcontraseña = $_POST['confcontraseña'];

        $errores = [];

        if ($contraseña !== $confcontraseña) {
            $errores[] = "Las contraseñas no coinciden";
        }

        if (empty($errores)) {
            // Encriptar contraseña antes de guardar
            $hash = password_hash($contraseña, PASSWORD_DEFAULT);

            $sql = "INSERT INTO usuarios (nombre, apellido, cedula, correo, celular, contraseña) 
                    VALUES ('$nombre', '$apellido', '$cedula', '$correo', '$telefono', '$hash')";
            mysqli_query($conex, $sql);
        }

        return $errores;
    }
}



function obtener_usuarios() {
 require __DIR__ . "/../db/conexion.php";

    $sql = "SELECT * FROM usuarios ";
    $resultado = mysqli_query($conex, $sql);
    return $resultado; //consulta
}


function obtener_barcos(){
    require __DIR__ . "/../db/conexion.php";

    $sql = "SELECT * FROM barco";
    $resultado = mysqli_query($conex,$sql);
    return $resultado;
}

function obtener_socio(){
        require __DIR__ . "/../db/conexion.php";

    $sql = "SELECT * FROM socio";
    $resultado = mysqli_query($conex,$sql);
    return $resultado;
}

function obtener_salidas(){
        require __DIR__ . "/../db/conexion.php";

    $sql = "SELECT * FROM salidas";
    $resultado = mysqli_query($conex,$sql);
    return $resultado;
}
?>


