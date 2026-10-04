<?php 
include "../../db/conexion.php";
require_once "../funciones.php";

$idUser=$_GET['id'];


$query="DELETE FROM usuarios WHERE id=".$idUser.";";
$resultado = mysqli_query($conex,$query);
// foreach ($resultado as $data){
//     var_dump($data);
// }
$state =($resultado) ? 4 :5;
header ("location: ../../pag/users.php");
