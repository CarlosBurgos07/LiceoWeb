<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "formulario_contacto");
// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexion fallida: " . $conexion->connect_error);
}
// Captura datos del formulario
$nombre = $_POST['nombre'];
$ciudad = $_POST['ciudad'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

// Insertar datos en la tabla
$sql = "INSERT INTO formulario (nombre, ciudad, correo, telefono, mensaje) VALUES ('$nombre', '$ciudad', '$correo', '$telefono', '$mensaje')";

if ($conexion->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>