<?php
require __DIR__ . "/../../db/conexion.php";
// $matricula = $_GET['matricula'];
require __DIR__ . "/../../formulario/actualizarBarco.php";

$estado = isset($_POST["actualizar"]);

if ($estado){
$matricula= $_POST['matricula'];
$nombre = $_POST['nombre'];
$amarre = $_POST['amarre'];

$cuota=$_POST["cuota_amarre"];
$cedula = $_POST['cedula'];
if ($nombre == "" || $amarre == "" || $cuota == "" || $cedula == "") {

    echo "Debe llenar todos los campos";

} else {

    $sql = "UPDATE barco SET 
            nombre = '$nombre',
            amarre = '$amarre',
            cuota_amarre = '$cuota',
            -- socio_cedula = '$cedula'

            WHERE matricula = '$matricula'";

    $resultado = mysqli_query($conex, $sql);

    if ($resultado) {
        echo "Barco actualizado correctamente";
    } else {
        echo "Error al actualizar: ";
    }
}

}
?>
