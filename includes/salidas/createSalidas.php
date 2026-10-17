<?php 
// require __DIR__ . "/../../db/conexion.php"; 
require __DIR__ . "/../../formulario/createsalidasForm.php";

 require __DIR__ . "/../../db/conexion.php"; 
    if (isset($_POST["registrar"])) { 

        $fecha = $_POST["Fecha"]; 
        $hora = $_POST["Hora"]; 
        $destino = $_POST["Destino"]; 
        $barco = $_POST["Barcos_Matricula"]; 
         

        $sql = "INSERT INTO salidas (Fecha, Hora, Destino, Barcos_Matricula) 
                VALUES ('$fecha', '$hora', '$destino', '$barco')"; 

        $resultado = mysqli_query($conex, $sql); 

        if (!$resultado) {
            echo "no se pudo registrar la salida";
        }

        echo "Barco registrado correctamente";
    } 

    

?>

<a href="../../pag/salidas.php">Volver a salidas</a>

