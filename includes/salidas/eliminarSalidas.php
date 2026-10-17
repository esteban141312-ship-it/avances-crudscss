<?php
require __DIR__ . "/../../db/conexion.php";

$idSalida=$_GET["id"];

$query="DELETE FROM salidas WHERE IdSalida = ".$idSalida.";";
$resultado = mysqli_query($conex,$query);

$state =($resultado) ? 4 :5;
header ("location: ../../pag/salidas.php");