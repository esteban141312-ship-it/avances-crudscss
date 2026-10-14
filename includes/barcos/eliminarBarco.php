<?php
include __DIR__ . "/../../db/conexion.php";

$matricula=$_GET["cmatricula"];
// var_dump($cedulasoc);

$query="DELETE FROM barco WHERE matricula =".$matricula.";";
$resultado = mysqli_query($conex,$query);

$state =($resultado) ? 4 :5;
header ("location: ../../pag/barcos.php");