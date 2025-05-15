<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Conctacto</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="guardar_contacto.php" method="POST">
        <h2>Contacto</h2><br>
        <input type="text" name="Nombre" placeholder="Tu Nombre" required><br>
        <input type="email" name="Correo" placeholder="Tu Correo" required><br>
        <textarea name="Mensaje" placeholder="Tu Mensaje" rows="5"required></textarea><br>
        <button type="submit">Enviar</button><br>
    </form>
</body>
</html>