<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasa Formulario</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="Formulario.php" method="POST" autocomplete="off">
    <h2>¡Queremos escucharte!</h2>
    <p>Para todas tus consultas y sugerencias, no dudes en contactarnos, responderemos a tu solicitud tan pronto como sea posible.</p>
    <div class="contenedor-campos">
    <div class="columna">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="ciudad" placeholder="Ciudad" required>
    </div>
    <div class="columna">
        <input type="email" name="correo" placeholder="Correo" required>
        <input type="text" name="telefono" placeholder="Telefono" required>
   </div>
</div>
    <textarea name="Mensaje" placeholder="Mensaje" required></textarea><br>
    <button type="submit">Enviar</button><br>
    </form>
</body>
</html>