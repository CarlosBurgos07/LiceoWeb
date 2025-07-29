<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Historial Médico</title>
<link rel="stylesheet" href="Style.css">
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
    <h2>Registrar Historial Médico</h2>

    <form action="" method="post">
        <label for="paciente_id">ID del Paciente:</label>
        <input type="number" id="paciente_id" name="paciente_id" required>

        <label for="fecha">Fecha de Consulta:</label>
        <input type="date" id="fecha" name="fecha" required>

        <label for="diagnostico">Diagnóstico:</label>
        <input type="text" id="diagnostico" name="diagnostico" required>

        <label for="tratamientos">Tratamientos:</label>
        <textarea id="tratamientos" name="tratamientos" rows="3" required></textarea>

        <label for="observaciones">Observaciones:</label>
        <textarea id="observaciones" name="observaciones" rows="3" required></textarea>

        <button type="submit">Guardar Historial</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtener datos del formulario
        $paciente_id = intval($_POST['paciente_id']);
        $fecha = $_POST['fecha'];
        $diagnostico = $_POST['diagnostico'];
        $tratamientos = $_POST['tratamientos'];
        $observaciones = $_POST['observaciones'];

        // Conexión a la base de datos
        $conn = new mysqli('localhost', 'root', '', 'hospital');

        if ($conn->connect_error) {
            echo "<p class='mensaje' style='color:red;'>Error de conexión: " . $conn->connect_error . "</p>";
        } else {
            // Escapar los valores para seguridad
            $fecha = $conn->real_escape_string($fecha);
            $diagnostico = $conn->real_escape_string($diagnostico);
            $tratamientos = $conn->real_escape_string($tratamientos);
            $observaciones = $conn->real_escape_string($observaciones);

            // Insertar en la tabla
            $sql = "INSERT INTO historial_medico (paciente_id, fecha, diagnostico, tratamientos, observaciones)
                    VALUES ($paciente_id, '$fecha', '$diagnostico', '$tratamientos', '$observaciones')";

            if ($conn->query($sql)) {
                echo "<p class='mensaje' style='color:green;'>Historial médico registrado correctamente.</p>";
            } else {
                echo "<p class='mensaje' style='color:red;'>Error al guardar el historial: " . $conn->error . "</p>";
            }

            $conn->close();
        }
    }
    ?>
</div>

</body>
</html>
