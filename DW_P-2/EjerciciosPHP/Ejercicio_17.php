<?php
$fecha1 = new DateTime("2025-06-01");
$fecha2 = new DateTime("2025-06-10");
$diferencia = $fecha1->diff($fecha2);
echo "Días de diferencia: " . $diferencia->days . "\n";
?>
