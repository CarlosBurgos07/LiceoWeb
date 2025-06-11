<?php
$numero = 20; // Cambia este valor por el número que desees
$i = 1;

echo "Números pares desde 1 hasta $numero:<br>";

while ($i <= $numero) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
    $i = $i + 1;
}
?>