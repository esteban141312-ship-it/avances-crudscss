<?php
session_start();
require "../db/conexion.php";
require "../includes/funciones.php";

if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    exit;
}

$socios = obtener_socio();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/css/style.css">
    <title>socios</title>
</head>

<body>


    <div class="header">
        <h1>Lista de Socios</h1>
        <a class="btn" href="Users.php">Usuarios</a>
        <a class="btn" href="barcos.php">Barcos</a>
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
                <th>Cedula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Direccon</th>
                <th>Telefono</th>
            </tr>
            <?php while ($s = mysqli_fetch_assoc($socios)): ?>
                <tr>
                    <td><?= $s['cedula'] ?></td>
                    <td><?= $s['nombres'] ?></td>
                    <td><?= $s['apellidos'] ?></td>
                    <td><?= $s['direccion'] ?></td>
                    <td><?= $s['telefono'] ?></td>
                    <td>
                        <a class="btn-eliminar" href="../includes/socio/eliminarSocio.php?cedula=<?php echo $s['cedula'] ?>">Eliminar</a>
                        
                        <a class="btn-actualizar" href="../includes/socio/actualizarSocio.php?cedula=<?php echo $s['cedula'] ?>">actualizar</a>
                    </td>
                </tr>
            <?php endwhile; ?>


        </table>
    </div>





    <a class="btn" href="../formulario/createsociosForm.php">Nuevo socio</a>





</body>

</html>