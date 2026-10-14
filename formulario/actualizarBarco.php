<?php
require __DIR__ . "/../includes/funciones.php";
$resultado= obtener_socio();
 $matricula = $_GET['matricula'];

?>

<h1>Actualizar barco</h1>

<form action="" method="POST">
<input type="hidden" name="matricula" value="<?= $matricula ?>">
    
    <label>Nombre:</label>
    <input type="text" name="nombre"><br>
    
    <label>Amarre:</label>
    <input type="text" name="amarre"><br>
    
    
    
  <label>Cuota del amarre:</label>
    <input type="text" name="cuota_amarre"><br>
    

    
    <input type="hidden" name="cedula" value="<?= $matricula ?>">
    <input type="submit" name="actualizar" value="Actualizar">

</form>

<a href="../../pag/barcos.php">Ir a los barcos</a>