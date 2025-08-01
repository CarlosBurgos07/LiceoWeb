<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Formulario Citas</title>
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
    <h2>Formulario de Registro de Cita</h2>
    <form action="" method="POST">
                <h2>Agregar Cita Médica</h2>
                <label for="paciente_id">Paciente:</label>
                <select name="paciente_id" required>
                    <option value="">Seleccione paciente</option>
                    <?php
                    $conn = new mysqli('localhost', 'root', '', 'hospital');
                    $res = $conn->query("SELECT * FROM pacientes");
                    while ($row = $res->fetch_assoc()) {
                        echo "<option value='{$row['id_paciente']}'>{$row['nombre']}</option>";
                    }
                    ?>
                </select>
                <label for="medico_id">Médico:</label>
                <select name="medico_id" required>
                    <option value="">Seleccione médico</option>
                    <?php
                    $res = $conn->query("SELECT * FROM medicos");
                    while ($row = $res->fetch_assoc()) {
                        echo "<option value='{$row['id_medico']}'>{$row['nombre']}</option>";
                    }
                    ?>
                </select>
                <label for="fecha">Fecha y Hora:</label>
                <input type="datetime-local" name="fecha" required>
                <label for="motivo">Motivo:</label>
                <textarea name="motivo" placeholder="Motivo de la cita" required></textarea>
                <button type="submit">Guardar</button>

                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    extract($_POST);
                    $conn->query("INSERT INTO citas (paciente_id, medico_id, fecha, motivo) 
            VALUES ('$paciente_id', '$medico_id', '$fecha', '$motivo')");
                    echo "<p>Cita registrada correctamente.</p>";
                    echo "<style>p { color: green; }</style>";
                }
                ?>
            </form>
</div>

</body>
</html>
