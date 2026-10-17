<?php
session_start();
require "../db/conexion.php";
require "../includes/funciones.php";

if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    exit;
}

$salidas = obtener_salidas();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/css/style.css">
    <title>barcos</title>
</head>

<body>


    <div class="header">
        <h1>Lista de Salidas</h1>
        <a class="btn" href="Users.php">Usuarios</a>
        <a class="btn" href="socios.php">Socios</a>
        
        <a class="btn" href="barcos.php">Barcos</a>


        <div class="contenedor-crrss">
            <a class="btn-cerrarsesion" href="CerrarSesion.php"> <svg class="icono-logout" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20 12h-9.5m7.5 3 3-3-3-3m-5-2V6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h5a2 2 0 0 0 2-2v-1" />
                </svg></a>
        </div>
    </div>
    <div class="contenedor-tabla-barcos">
        <table>
            <tr>
                <!-- <th>ID</th> -->
                <th>Fecha</th>
                <th>Hora</th>
                <th>Destino</th>
                <th>matricula del barco</th>
                
            </tr>
            <?php while ($sa = mysqli_fetch_assoc($salidas)): ?>
                <tr>
                    <td><?= $sa['Fecha'] ?></td>
                    <td><?= $sa['Hora'] ?></td>
                    <td><?= $sa['Destino'] ?></td>
                    <td><?= $sa['Barcos_Matricula'] ?></td>
                    <td>
                        <a href="../includes/salidas/eliminarSalidas.php?idSalida=<?php echo $sa['IdSalida'] ?>">Eliminar</a>
                        <?php echo " || " ?>
                        <a href="../includes/salidas/actualizarSalidas.php?idSalida=<?php echo $sa['IdSalida'] ?>">actualizar</a>
                    </td>
                </tr>
            <?php endwhile; ?>


        </table>
    </div>





    <a class="btn" href="../includes/salidas/createSalidas.php">Nueva salida</a>





</body>

</html>