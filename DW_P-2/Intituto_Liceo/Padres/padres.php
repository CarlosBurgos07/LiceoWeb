<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Padres</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="registro_padres.php" method="POST" autocomplete="off">
        <h2>Padres</h2><br>
        <input type="text" name="nombre" placeholder="Nombre" required><br>
        <input type="text" name="apellido" placeholder="Apellido" required><br>
        <input type="text" name="telefono" placeholder="Telefono" required><br>
        <button type="submit">Enviar</button><br>
    </form>
</body>
</html>