<?php


function create_socio()
{require __DIR__ . "/../../db/conexion.php";
    if (isset($_POST["registrar"])) {

        $cedula = $_POST["cedula"];
        $nombres = $_POST["nombres"];
        $apellidos = $_POST["apellidos"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];

        $errores = [];

        $sql = "INSERT INTO socio (cedula, nombres, apellidos, direccion, telefono)
                VALUES ('$cedula', '$nombres', '$apellidos', '$direccion', '$telefono')";

        $resultado = mysqli_query($conex, $sql);

        if ($resultado) {
               header("Location: ../pag/socios.php");
        exit;
        }else{$errores[] = "No se pudo registrar el socio";}


        return $errores;
    }
}
?>
<a href="../../pag/socios.php">Volver a Socios</a>