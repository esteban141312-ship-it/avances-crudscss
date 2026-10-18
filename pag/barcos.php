<?php
session_start();
require "../db/conexion.php";
require "../includes/funciones.php";

if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    exit;
}

$barcos = obtener_barcos();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/css/app.css">
    <title>barcos</title>
</head>

<body>


    <div class="header">
        <h1>Lista de Barcos</h1>
        <a class="btn" href="Users.php">Usuarios</a>
        <a class="btn" href="socios.php">Socios</a>
        <a class="btn" href="salidas.php">Salidas</a>


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
                <th>Matricula</th>
                <th>Nombre</th>
                <th>Amarre</th>
                <th>Cuota de amarre</th>
                <th>Socio</th>
            </tr>
            <?php while ($b = mysqli_fetch_assoc($barcos)): ?>
                <tr>
                    <td><?= $b['matricula'] ?></td>
                    <td><?= $b['nombre'] ?></td>
                    <td><?= $b['amarre'] ?></td>
                    <td><?= $b['cuota_amarre'] ?></td>
                    <td><?= $b['socio_cedula'] ?></td>
                    <td class="contenedor-acciones">
                        <a class="btn-eliminar" href="../includes/barcos/eliminarBarco.php?matricula=<?php echo $b['matricula'] ?>"><svg xmlns="http://www.w3.org/2000/svg" 
     width="24" 
     height="24" 
     fill="none" 
     viewBox="0 0 24 24">
    <path
        stroke="currentColor"
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="M4 7h16M10 11v6m4-6v6M6 7l1 12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2l1-12M9 7V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v3"
    />
</svg></a>
                        <a class="btn-actualizar" href="../includes/barcos/actualizarBarco.php?matricula=<?php echo $b['matricula'] ?>">actualizar</a>
                    </td>
                </tr>
            <?php endwhile; ?>


        </table>
    </div>





    <a class="btn" href="../includes/barcos/createBarcos.php">Nuevo barco</a>





</body>

</html>
