<?php include 'obtener_clientes.php';?>
<?php $resultado = ObtenerClientes()?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="contenedor">
        <h2>Listado de Clientes</h2>
        <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                </tr>

                <?php while ($cliente = $resultado->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $cliente['id']; ?></td>
                        <td><?php echo $cliente['nombre']; ?></td>
                        <td><?php echo $cliente['correo']; ?></td>
                        <td><?php echo $cliente['telefono']; ?></td>
                    </tr>
                <?php endwhile; ?>
        </table>
    </div>
</body>
</html>

