<?php
require __DIR__ . "/../../db/conexion.php";
require __DIR__ . "/../../formulario/actualizarSalidas.php";
$estado = isset($_POST["actualizar"]);

if ($estado){
$fecha= $_POST['Fecha'];
$hora = $_POST['Hora'];
$destino= $_POST['Destino'];
$id=$_POST["idsalidas"];

if ($fecha == "" || $hora == "" || $destino == "" ) {

    echo "Debe llenar todos los campos";

} else {

    $sql = "UPDATE salidas SET 
            Fecha = '$fecha',
            Hora = '$hora',
           Destino = '$destino'
            WHERE IdSalida = '$id'";

    $resultado = mysqli_query($conex, $sql);

    if ($resultado) {
        echo "Salida actualizada correctamente";
    } else {
        echo "Error al actualizar: "  . mysqli_error($conex);;
    }
}

}
?>
<a href="../../pag/salidas.php">Volver a Salidas</a>
