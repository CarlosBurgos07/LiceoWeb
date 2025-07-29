<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Especialidades Médicas</title>
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
    <h2 style="text-align:center;">Agregar Especialidad</h2>
    <form action="" method="POST" style="max-width:400px; margin:2rem auto;">
        <label for="nombre_especialidad">Nombre de la especialidad:</label>
        <input type="text" id="nombre_especialidad" name="nombre_especialidad" placeholder="Nombre de la especialidad" required>
        <button type="submit" style="background:#0275d8; color:#fff; border:none; padding:0.7rem 1.5rem; border-radius:6px; font-size:1.1rem; font-weight:bold; cursor:pointer; margin-top:1rem;">
            Guardar
        </button>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['nombre_especialidad'])) {
            $conn = new mysqli('localhost', 'root', '', 'hospital');
            if ($conn->connect_error) {
                echo "<p style='color:red;'>Error de conexión: " . $conn->connect_error . "</p>";
            } else {
                $nombre = $conn->real_escape_string($_POST['nombre_especialidad']);
                $sql = "INSERT INTO especialidades (nombre_especialidad) VALUES ('$nombre')";
                if ($conn->query($sql)) {
                    echo "<p style='color:green; text-align:center;'>Especialidad registrada correctamente.</p>";
                } else {
                    echo "<p style='color:red; text-align:center;'>Error al registrar la especialidad.</p>";
                }
                $conn->close();
            }
        }
        ?>
    </form>
</div>
</body>
</html>