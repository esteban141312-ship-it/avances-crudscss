<?php
session_start();
require "../db/conexion.php";
require "../includes/funciones.php";

if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    exit;
}

$usuarios = obtener_usuarios();
?>
<link rel="stylesheet" href="../dist/css/style.css">
<div class="header">
<h1>Lista de Usuarios</h1>
<a class="btn" href="barcos.php">Barcos</a>
<a class="btn" href="salidas.php">Salidas</a>
<a class="btn" href="socios.php">Socios</a>
<div class="contenedor-crrss">
    <a class="btn-cerrarsesion" href="CerrarSesion.php"> <svg class="icono-logout" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M20 12h-9.5m7.5 3 3-3-3-3m-5-2V6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h5a2 2 0 0 0 2-2v-1" />
        </svg></a>
</div>
</div>

<table>
    <tr>
        <!-- <th>ID</th> -->
        <th>Cédula</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Correo</th>
        <th>Teléfono</th>
        <th>Acciones</th>
    </tr>
    <?php while ($usuar = mysqli_fetch_assoc($usuarios)): ?>
        <tr>
            <td><?= $usuar['cedula'] ?></td>
            <td><?= $usuar['nombre'] ?></td>
            <td><?= $usuar['apellido'] ?></td>
            <td><?= $usuar['correo'] ?></td>
            <td><?= $usuar['celular'] ?></td>
            <td>
                <a href="../includes/users/EliminarUs.php?id=<?php echo $usuar['id'] ?>">Eliminar</a>
                <?php echo " || " ?>
                <a href="../formulario/modificar.php?id=<?php echo $usuar['id'] ?>">actualizar</a>
            </td>
        </tr>
    <?php endwhile; ?>

    <a href="../formulario/FormUsuarios.php">Agregar Usuario</a> 


</table>
