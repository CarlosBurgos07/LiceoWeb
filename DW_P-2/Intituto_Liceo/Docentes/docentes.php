<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Docentes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="registro_docentes.php" method="POST" autocomplete="off">
        <h2>Docentes</h2><br>
        <input type="text" name="Nombre" placeholder="Nombre" required><br>
        <input type="text" name="Apellido" placeholder="Apellido" required><br>
        <input type="text" name="Especialidad" placeholder="Especialidad" required><br>
        <button type="submit">Enviar</button><br>
    </form>
</body>
</html>