<?php 
require __DIR__ . "/../../db/conexion.php"; 

function create_barco($conex) 
{ 
    if (isset($_POST["registrar"])) { 

        $matricula = $_POST["matricula"]; 
        $nombre = $_POST["nombre"]; 
        $amarre = $_POST["amarre"]; 
        $cuota = $_POST["cuota_amarre"]; 
        $socio_cedula = $_POST["socio_cedula"]; 

        $sql = "INSERT INTO barco (matricula, nombre, amarre, cuota_amarre, socio_cedula) 
                VALUES ('$matricula', '$nombre', '$amarre', '$cuota', '$socio_cedula')"; 

        $resultado = mysqli_query($conex, $sql); 

        if (!$resultado) {
            die("Error: " . mysqli_error($conex));
        }

        echo "Barco registrado correctamente";
    } 
} 
?>

