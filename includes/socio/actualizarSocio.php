<?php
require __DIR__ . "/../../db/conexion.php";
require __DIR__ . "/../../formulario/actualizarSocio.php";

$estado = isset($_POST["actualizar"]);

if ($estado){
 $cedula = $_POST['cedula'];

$nombre = $_POST['nombres'];
$apellido = $_POST['apellidos'];

$direccion=$_POST["direccion"];
$telefono = $_POST['telefono'];
if ($nombre == "" || $apellido == "" || $telefono == "" || $direccion == "") {

    echo "Debe llenar todos los campos";

} else {

    $sql = "UPDATE socio SET 
            nombres = '$nombre',
            apellidos = '$apellido',
            direccion = '$direccion',
            telefono = '$telefono'
            WHERE cedula = '$cedula'";

    $resultado = mysqli_query($conex, $sql);

    if ($resultado) {
        echo "Socio actualizado correctamente";
    } else {
        echo "Error al actualizar: ";
    }
}

}
?>

 