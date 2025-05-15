<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "instituto_liceo");
// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexion fallida: " . $conexion->connect_error);
}
// Captura datos del formulario
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$especialidad = $_POST['Especialidad'];

// Insertar datos en la tabla
$sql = "INSERT INTO docentes (nombre, apellido, especialidad) VALUES ('$nombre', '$apellido', '$especialidad')";

if ($conexion->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>