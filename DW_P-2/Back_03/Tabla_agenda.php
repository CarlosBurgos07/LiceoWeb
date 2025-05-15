<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Agenda</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="guardar_contactos.php" method="POST" enctype="multipart/form-data">
        <h2>Agenda</h2><br>
        <input type="text" name="Nombre" placeholder="Nombre" required><br>
        <input type="text" name="Apellido" placeholder="Apellido" required><br>
        <input type="text" name="Telefono" placeholder="Telefono" required><br>
        <input type="text" name="Genero" placeholder="Genero" required><br>
        <input type="text" name="Correo" placeholder="Correo" required><br>
        <input type="text" name="Direccion" placeholder="Direccion" required><br>
        <input type="file" name="Fotografia" accept="image/*" required><br>
        <button type="submit">Enviar</button><br>
    </form>
</body>
</html>