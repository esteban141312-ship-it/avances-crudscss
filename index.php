<?php
session_start();
require "./db/conexion.php";
require "./includes/funciones.php";

// Procesar registro si se envió el formulario
$adduser = create_user($conex);

// Obtener usuarios si hay sesión activa
$usuarios = null;
if (isset($_SESSION['usuario'])) {
    $usuarios = obtener_usuarios($conex);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="dist/css/style.css">
</head>

<body>
<?php
require __DIR__ . "/pag/login.php"
?>


    <?php
    if (isset($adduser)) {
        foreach ($adduser as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
    ?>

</body>

</html>