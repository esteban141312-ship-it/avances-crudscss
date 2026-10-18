<?php
session_start();
require __DIR__ . "/../includes/funciones.php";
$resultado= obtener_socio();
 $matricula = $_GET['matricula'];

?>
<head>
    <meta charset="UTF-8">
    <title>actualizar</title>
    <link rel="stylesheet" href="../../dist/css/app.css">
</head>
<h1>Actualizar barco</h1>
<div class="contenedor-form">
<form action="" method="POST">
<input type="hidden" name="matricula" value="<?= $matricula ?>">
    
    <label>Nombre:</label>
    <input type="text" name="nombre"><br>
    
    <label>Amarre:</label>
    <input type="text" name="amarre"><br>
    
    
    
  <label>Cuota del amarre:</label>
    <input type="text" name="cuota_amarre"><br>
    

    
    <input type="hidden" name="matricula" value="<?= $matricula ?>">
    <input type="submit" name="actualizar" value="Actualizar">

</form>
</div>
<?php if (isset($_SESSION['usuario'])) { ?>
<div class="contenedor-btn-agregar">
    <a class="btn" href="../../pag/barcos.php">Volver a barcos</a>
</div>
<?php } ?>
