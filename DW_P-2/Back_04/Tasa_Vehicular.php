<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasa Vehicular</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="Registro_Vehicular.php" method="POST" autocomplete="off">
        <h2>Formulario de Registro Vehicular</h2><br>
        <input type="text" name="Placa" placeholder="Placa" required><br>
        <input type="text" name="Marca" placeholder="Marca" required><br>
        <input type="text" name="Modelo" placeholder="Modelo" required><br>
        <input type="text" name="Año" placeholder="Año" required><br>
        <input type="text" name="Color" placeholder="Color" required><br>
        <input type="text" name="Nombre_Propietario" placeholder="Propietario" required><br>
        <input type="text" name="Telefono_Contacto" placeholder="Telefono" required><br>
        <button type="submit">Enviar</button><br>
    </form>
</body>
</html>