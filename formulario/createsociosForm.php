<link rel="stylesheet" href="../dist/css/app.css">
<form action="" method="POST">

    <label for="cedula">Cédula:</label>
    <input type="text" id="cedula" name="cedula" maxlength="10" required>

    <br><br>

    <label for="nombres">Nombres:</label>
    <input type="text" id="nombres" name="nombres" maxlength="25" required>

    <br><br>

    <label for="apellidos">Apellidos:</label>
    <input type="text" id="apellidos" name="apellidos" maxlength="25" required>

    <br><br>

    <label for="direccion">Dirección:</label>
    <input type="text" id="direccion" name="direccion" maxlength="50" required>

    <br><br>

    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono" maxlength="10" required>

    <br><br>

    <button type="submit" name="registrar">Registrar socio</button>

</form>

<?php
require __DIR__ . "/../includes/socio/createSocio.php";
create_socio();


?>

