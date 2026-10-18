<?php
session_start();

$idSalidas = $_GET['idSalida'];

?>
<link rel="stylesheet" href="../../dist/css/app.css">

<form action="" method="POST">

    <label for="Fecha">Fecha:</label>
    <input type="date" id="Fecha" name="Fecha" required>

    <br><br>

    <label for="Hora">Hora:</label>
    <input type="time" id="Hora" name="Hora" required>

    <br><br>

    <label for="Destino">Destino:</label>
    <input type="text" id="Destino" name="Destino" maxlength="50" required>
    <input type="hidden" name="idsalidas" value="<?= $idSalidas ?>">
   <br><br>

    <button type="submit" name="actualizar">Actualizar salida</button>



</form>

<?php if (isset($_SESSION['usuario'])) { ?>
<div class="contenedor-btn-agregar">
    <a class="btn" href="../../pag/salidas.php">Volver a salidas</a>
</div>
<?php } ?>
