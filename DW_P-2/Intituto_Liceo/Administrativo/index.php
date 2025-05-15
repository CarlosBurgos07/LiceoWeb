<?php include 'obtener_administrativo.php';?>
<?php $resultado = ObtenerAdministrativos()?>

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
        <h2>Personal Administrativo</h2>
        <table>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Puesto</th>
                </tr>

                <?php while ($administrativo = $resultado->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $administrativo['nombre']; ?></td>
                        <td><?php echo $administrativo['apellido']; ?></td>
                        <td><?php echo $administrativo['puesto']; ?></td>
                    </tr>
                <?php endwhile; ?>
        </table>
    </div>
</body>
</html>