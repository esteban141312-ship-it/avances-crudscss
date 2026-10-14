<?php
require __DIR__ . "/../includes/funciones.php";
$resultado= obtener_socio();
?>
<form action="" method="POST">

    <label for="matricula">Matrícula:</label>
    <input type="text" id="matricula" name="matricula"  required>

    <br><br>

    <label for="nombre">Nombre del barco:</label>
    <input type="text" id="nombre" name="nombre" required>

    <br><br>

    <label for="amarre">Amarre:</label>
    <input type="text" id="amarre" name="amarre"  required>

    <br><br>

    <label for="cuota_amarre">Cuota de amarre:</label>
    <input type="number" id="cuota_amarre" name="cuota_amarre" required>

    <br><br>

 <label for="cedula">cedula socio:</label>
    <select id="cedula" name="cedula" required>

        <option value="">Seleccione un socio</option>
         <?php while ($socio = mysqli_fetch_assoc($resultado)) { ?>
        <option value="<?php echo $socio['cedula']; ?>">
             <?php echo $socio['nombres'] . " " . $socio['apellidos']; ?>
        </option>
        <?php } ?>
    </select>

    <br><br>

    <button type="submit" name="registrar">Registrar barco</button>

</form>