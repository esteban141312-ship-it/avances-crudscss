<?php

$idSalidas = $_GET['idSalida'];

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
    <input type="hidden" name="idsalidas" value="<?= $idSalidas ?>">
   <br><br>

    <button type="submit" name="actualizar">Actualizar salida</button>



</form>
