<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "formulario_contacto");
// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexion fallida: " . $conexion->connect_error);
}
// Captura datos del formulario
$nombre = $_POST['Nombre'];
$apellido = $_POST['Apellido'];
$telefono = $_POST['Telefono'];
$genero = $_POST['Genero'];
$correo = $_POST['Correo'];
$direccion = $_POST['Direccion'];
$fotografia = $_FILES['Fotografia']['name'];

// Insertar datos en la tabla
$sql = "INSERT INTO agenda (nombre, apellido, telefono, genero, correo, direccion, fotografia ) VALUES ('$nombre', '$apellido', '$telefono', '$genero', '$correo', '$direccion', '$fotografia')";

if ($conexion->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>