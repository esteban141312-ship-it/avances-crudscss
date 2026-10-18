<?php
session_start();
require __DIR__ . '/../db/conexion.php';

if (isset($_SESSION['usuario'])) {
    header('Location: navOpciones.php');
    exit;
}

$errorLogin = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $nombre = $_POST['nombre'] ?? '';
    $contraseña = $_POST['contraseña'] ?? '';
    $sql = "SELECT * FROM usuarios WHERE nombre='$nombre'";
    $query = mysqli_query($conex, $sql);
    $user = $query ? mysqli_fetch_assoc($query) : null;

    if ($user && password_verify($contraseña, $user['contraseña'])) {
        $_SESSION['usuario'] = $user['nombre'];
        header('Location: navOpciones.php');
        exit;
    }

    $errorLogin = 'Nombre o contraseña incorrectos.';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../dist/css/app.css">
</head>
<body>
    <div class="contenedor-todo">
        <div class="contenedor-titulo-login"><h1>Iniciar sesión</h1></div>
        <div class="contenedor-form">
            <form method="POST">
                <label for="nombre">Nombre:</label><br>
                <input id="nombre" type="text" name="nombre" required><br>
                <label for="contraseña">Contraseña:</label><br>
                <input id="contraseña" type="password" name="contraseña" required><br>
                <input class="btn-iniciarsesion" type="submit" name="login" value="Ingresar">
            </form>
            <?php if ($errorLogin): ?>
                <p style="color: red;"><?php echo htmlspecialchars($errorLogin, ENT_QUOTES, 'UTF-8'); ?></p>
            <?php endif; ?>
        </div>
        <div class="contenedor-btn-agregar">
            <a class="btn" href="../includes/users/createUser.php">Agregar usuario</a>
        </div>
    </div>
</body>
</html>
