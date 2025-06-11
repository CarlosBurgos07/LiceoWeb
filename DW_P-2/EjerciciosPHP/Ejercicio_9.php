<?php
$cadena = strtolower("Hola Mundo");
$vocales = ['a', 'e', 'i', 'o', 'u'];
$contador = 0;

for ($i = 0; $i < strlen($cadena); $i++) {
    if (in_array($cadena[$i], $vocales)) {
        $contador++;
    }
}
echo "La cadena contiene $contador vocal(es).\n";
?>
