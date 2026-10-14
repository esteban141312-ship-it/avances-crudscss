<?php
// session_start();
require_once __DIR__ . "/../db/conexion.php";
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../dist/css/style.css">
</head>

<body>
    <div class=contenedor-todo>
        <div class="contenedor-titulo-login">
            <h1>Iniciar Sesión</h1>
        </div>
        <div class="contenedor-form">
            <form action="" method="POST">
                <label for="nombre">Nombre:</label><br>
                <input type="text" name="nombre" required><br>

                <label for="contraseña">Contraseña:</label><br>
                <input type="password" name="contraseña" required><br>

                <input class="btn-iniciarsesion" type="submit" name="login" value="Ingresar">
            </form>
        </div>
    </div>
</body>

</html>
<div class="contenedor-btn-agregar">
<a class="btn" href="../formulario/FormUsuarios.php">Agregar Usuario</a>
</div>
<?php
if (isset($_POST['login'])) {
    $nombre = $_POST['nombre'];
    $contraseña = $_POST['contraseña'];

    $sql = "SELECT * FROM usuarios WHERE nombre='$nombre' ";
    $query = mysqli_query($conex, $sql);
    $user = mysqli_fetch_assoc($query);

    if ($user && password_verify($contraseña, $user['contraseña'])) {
        $_SESSION['usuario'] = $user['nombre'];
        header("Location: pag/navOpciones.php");
        exit;
    } else {
        echo "<p style='color:red;'>Nombre o contraseña incorrectos</p>";
        echo "<a href='../formulario/FormLogin.php'>Volver al login</a>";
    }
}
?>