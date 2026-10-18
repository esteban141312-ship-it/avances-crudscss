<?php
session_start();

$cedula = $_GET['cedula'];

?>
<link rel="stylesheet" href="../../dist/css/app.css">

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

<?php if (isset($_SESSION['usuario'])) { ?>
<div class="contenedor-btn-agregar">
    <a class="btn" href="../../pag/socios.php">Volver a socios</a>
</div>
<?php } ?>
