<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Médicos</title>
<link rel="stylesheet" href="style.css">
</head>
<body>


<nav>
    <ul>
    <li><a href="Citas.html">Citas</a></li>
    <li><a href="Especialidades.html">Especialidades</a></li>
    <li><a href="Historial_Medico.html">Historial Médico</a></li>
    <li><a href="Medicos.html">Médicos</a></li>
    <li><a href="Pacientes.html">Pacientes</a></li>
    </ul>
</nav>

<div class="form-container">
    <h2>Registrar Médico</h2>

    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>

        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required>

        <button type="submit">Registrar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nombre = $_POST['nombre'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];

        // Conexión a la base de datos
        $conn = new mysqli('localhost', 'root', '', 'hospital');

        if ($conn->connect_error) {
            echo "<p class='mensaje' style='color:red;'>Error de conexión: " . $conn->connect_error . "</p>";
        } else {
            $nombre = $conn->real_escape_string($nombre);
            $telefono = $conn->real_escape_string($telefono);
            $correo = $conn->real_escape_string($correo);

            $sql = "INSERT INTO medicos (nombre, telefono, correo) VALUES ('$nombre', '$telefono', '$correo')";

            if ($conn->query($sql)) {
                echo "<p class='mensaje' style='color:green;'>Médico registrado correctamente.</p>";
            } else {
                echo "<p class='mensaje' style='color:red;'>Error al registrar médico: " . $conn->error . "</p>";
            }

            $conn->close();
        }
    }
    ?>
</div>

</body>
</html>
