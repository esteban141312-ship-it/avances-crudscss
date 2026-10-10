<form action="../includes/barcos/createBarcos.php" method="POST">

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

 <label for="Barcos_Matricula">cedula socio:</label>
    <select id="Barcos_Matricula" name="Barcos_Matricula" required>

        <option value="">Seleccione un socio</option>

        <option value="">
            <!-- Aquí irá la consulta de los socios -->
        </option>
     
    </select>

    <br><br>

    <button type="submit" name="registrar">Registrar barco</button>

</form>