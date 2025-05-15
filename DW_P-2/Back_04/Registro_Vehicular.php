<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "formulario_contacto");
// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexion fallida: " . $conexion->connect_error);
}
// Captura datos del formulario
$placa = $_POST['Placa'];
$marca = $_POST['Marca'];
$modelo = $_POST['Modelo'];
$año = $_POST['Año'];
$color = $_POST['Color'];
$Nombre_propietario = $_POST['Nombre_Propietario'];
$tel_contacto = $_POST['Telefono_Contacto'];

// Insertar datos en la tabla
$sql = "INSERT INTO vehiculos (placa, marca, modelo, anio, color, nombre_propietario, tel_contacto ) VALUES ('$placa', '$marca', '$modelo', '$año', '$color', '$Nombre_propietario', '$tel_contacto')";

if ($conexion->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>