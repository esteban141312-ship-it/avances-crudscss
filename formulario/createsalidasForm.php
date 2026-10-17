<?php
require __DIR__ . "/../includes/funciones.php";
$resultado=obtener_barcos();
?>

<form action="" method="POST">

    <label for="Fecha">Fecha:</label>
    <input type="date" id="Fecha" name="Fecha" required>

    <br><br>

    <label for="Hora">Hora:</label>
    <input type="time" id="Hora" name="Hora" required>

    <br><br>

    <label for="Destino">Destino:</label>
    <input type="text" id="Destino" name="Destino" maxlength="50" required>

    <br><br>

    <label for="Barcos_Matricula">Barco:</label>
    <select id="Barcos_Matricula" name="Barcos_Matricula" required>

        <option value="">Seleccione un barco</option>
        <?php while ($barco = mysqli_fetch_assoc($resultado) ) {?>
        <option value = "<?php echo $barco['matricula'];?>">
            <?php echo $barco['nombre'];?>
        </option>
        <?php } ?>
      
        
     
    </select>

    <br><br>

    <button type="submit" name="registrar">Registrar salida</button>



</form>

<!-- <a class="btn" href="../pag/salidas.php">Ir a salidas</a> -->