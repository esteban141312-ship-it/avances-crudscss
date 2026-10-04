<?php
session_start();
require "../db/conexion.php";  
require "../includes/funciones.php";  

if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    exit;
}

$usuarios = obtener_usuarios($conex);
?>

<h1>Lista de Usuarios</h1>
<!-- <a href="../formulario/FormUsuarios.php">Agregar Usuario</a> |  -->
<a href="CerrarSesion.php">Cerrar Sesión</a>

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
    <?php while($usuar = mysqli_fetch_assoc($usuarios)): ?>
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
</table>
