<?php
// Parámetros de conexión
$host = "localhost";
$usuario = "root";
$clave = "";
$base = "hospital"; // Asegúrate de que el nombre coincida con tu base de datos

// Crear conexión
$conn = new mysqli($host, $usuario, $clave, $base);

// Verificar conexión
if ($conn->connect_error) {
    die("❌ Conexión fallida: " . $conn->connect_error);
} else {
    echo "✅ Conexión exitosa a la base de datos '$base'";
}

// Cerrar conexión (opcional aquí)
$conn->close();
?>
