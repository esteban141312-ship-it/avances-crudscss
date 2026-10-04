<?php

$id = $_GET['id'];

?>

<h1>Modificar Usuario</h1>

<form action="../includes/users/Actualizar.php" method="POST">

    
    <label>Nombre:</label>
    <input type="text" name="nombre"><br>
    
    <label>Apellido:</label>
    <input type="text" name="apellido"><br>
    
    <label>Cédula:</label>
    <input type="text" name="cedula"><br>
    
    <label>Correo:</label>
    <input type="email" name="correo"><br>
    
    <label>Teléfono:</label>
    <input type="text" name="telefono"><br>
    
    <label>Contraseña:</label>
    <input type="password" name="contraseña"><br>
    
    <label>Confirmar Contraseña:</label>
    <input type="password" name="confcontraseña"><br>
    
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="submit" name="actualizar" value="Registrar">

</form>