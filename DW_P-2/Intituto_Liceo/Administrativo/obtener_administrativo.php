<?php
function ObtenerAdministrativos() {
    $conexion = new mysqli("localhost", "root", "", "instituto_liceo");

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    $resultado = $conexion->query("SELECT * FROM administrativos");
    return $resultado;
}
?>