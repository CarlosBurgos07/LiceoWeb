<?php include 'obtener_padres.php';?>
<?php $resultado = ObtenerPadres()?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link rel="stylesheet" href="style-2.css">
</head>
<body>
<header>
        <link rel="stylesheet" href="style-3.css">
        <h1>Listado de Estudiantes</h1>
        <nav>
            <ul>
            <li><a href="../Administrativo/index.php">Administrativo</a></li>
            <li><a href="../Docentes/index.php">Docentes</a></li>
            <li><a href="../Estudiantes/index.php">Estudiantes</a></li>
            <li><a href="../Grados/index.php">Grados</a></li>
            <li><a href="../Militares/index.php">Militares</a></li>
            <li><a href="../Padres/index.php">Padres</a></li>
            </ul>
        </nav>
    </header> 
    <div class="contenedor">
        <h2>Padres de Familia</h2>
        <table>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Telefono</th>
                </tr>

                <?php while ($padres = $resultado->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $padres['nombre']; ?></td>
                        <td><?php echo $padres['apellido']; ?></td>
                        <td><?php echo $padres['telefono']; ?></td>

                    </tr>
                <?php endwhile; ?>
        </table>
    </div>
</body>
</html>