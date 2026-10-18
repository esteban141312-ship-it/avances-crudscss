<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear usuario</title>
    <link rel="stylesheet" href="../../dist/css/app.css">
</head>
<body>
    <div class="contenedor-todo">
        <h1>Agregar usuario</h1>
        <div class="contenedor-form">
            <form method="POST" autocomplete="off">
                <label for="nombre">Nombre:</label>
                <input id="nombre" type="text" name="nombre" required><br>
                <label for="apellido">Apellido:</label>
                <input id="apellido" type="text" name="apellido" required><br>
                <label for="cedula">Cédula:</label>
                <input id="cedula" type="text" name="cedula" required><br>
                <label for="correo">Correo:</label>
                <input id="correo" type="email" name="correo" required><br>
                <label for="telefono">Teléfono:</label>
                <input id="telefono" type="text" name="telefono" required><br>
                <label for="contraseña">Contraseña:</label>
                <input id="contraseña" type="password" name="contraseña" required><br>
                <label for="confcontraseña">Confirmar contraseña:</label>
                <input id="confcontraseña" type="password" name="confcontraseña" required><br>
                <input class="btn" type="submit" name="agregar" value="Registrar">
            </form>
        </div>
        <?php if (!isset($_SESSION['usuario'])) { ?>
            <a href="../../pag/login.php" class="btn-iniciarsesion">Iniciar sesión</a>
        <?php } else { ?>
            <a href="../../pag/Users.php" class="btn-iniciarsesion">Volver a usuarios</a>
        <?php } ?>
    </div>
</body>
</html>
