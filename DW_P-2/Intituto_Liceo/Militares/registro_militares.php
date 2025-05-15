<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "instituto_liceo");
// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexion fallida: " . $conexion->connect_error);
}
// Captura datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$rango = $_POST['rango'];

// Insertar datos en la tabla
$sql = "INSERT INTO militares (nombre, apellido, rango) VALUES ('$nombre', '$apellido', '$rango')";

if ($conexion->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>