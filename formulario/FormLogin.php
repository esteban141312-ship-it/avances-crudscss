<?php

require_once __DIR__ . "/../pag/login.php";

// session_start();

// if (isset($_SESSION['usuario'])) {
//     header("Location: ../index.php");
//     exit;
// }


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login por Nombre</title>
    <link rel="stylesheet" href="../dist/css/style.css">
</head>
<body>
    <div class=contenedor-todo>
    <div class="contenedor-titulo-login">
    <h1 >Iniciar Sesión</h1>
    </div>
    <div class="contenedor-form">
    <form action="" method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" required><br>

        <label for="contraseña">Contraseña:</label><br>
        <input type="password" name="contraseña" required><br>

        <input  type="submit" name="login" value="Ingresar">
    </form>
    </div>
    </div>
</body>
</html>

<a href="../formulario/FormUsuarios.php">Agregar Usuario</a> 
