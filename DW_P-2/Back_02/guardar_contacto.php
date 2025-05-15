<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "formulario_contacto");
// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexion fallida: " . $conexion->connect_error);
}
// Captura datos del formulario
$nombre = $_POST['Nombre'];
$correo = $_POST['Correo'];
$mensaje = $_POST['Mensaje'];

// Insertar datos en la tabla
$sql = "INSERT INTO contactos (nombre, correo, mensaje) VALUES ('$nombre', '$correo', '$mensaje')";

if ($conexion->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>