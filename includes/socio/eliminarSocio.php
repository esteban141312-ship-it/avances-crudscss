<?php
include __DIR__ . "/../../db/conexion.php";

$cedulasoc=$_GET["cedula"];
// var_dump($cedulasoc);

$query="DELETE FROM socio WHERE cedula = '$cedulasoc'";
$resultado = mysqli_query($conex,$query);

$state =($resultado) ? 4 :5;
header ("location: ../../pag/socios.php");
