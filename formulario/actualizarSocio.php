<?php

$cedula = $_GET['cedula'];

?>

<h1>Actualizar socio</h1>

<form action="" method="POST">

    
    <label>Nombres:</label>
    <input type="text" name="nombres"><br>
    
    <label>Apellidos:</label>
    <input type="text" name="apellidos"><br>
    
    
    
  <label>direccion:</label>
    <input type="text" name="direccion"><br>
    
    <label>Teléfono:</label>
    <input type="text" name="telefono"><br>
    

    
    <input type="hidden" name="cedula" value="<?= $cedula ?>">
    <input type="submit" name="actualizar" value="Actualizar">

</form>

<a href="../../pag/socios.php">Ir a los socios</a>