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
$fecha_nacimiento = $_POST['Fecha_nacimiento'];
$grado = $_POST['Grado'];

// Insertar datos en la tabla
$sql = "INSERT INTO estudiantes (nombre, apellido, fecha_nacimiento, grado) VALUES ('$nombre', '$apellido', '$fecha_nacimiento', '$grado')";

if ($conexion->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>
