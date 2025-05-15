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
$nombre_grado = $_POST['nombre_grado'];

// Insertar datos en la tabla
$sql = "INSERT INTO grados (Nombre, Apellido, Nombre_grado) VALUES ('$nombre', '$apellido', '$nombre_grado')";

if ($conexion->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>