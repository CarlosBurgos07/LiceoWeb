<?php
$año = 2024;
echo (($año % 4 == 0 && $año % 100 != 0) || ($año % 400 == 0)) ?
    "$año es bisiesto\n" : "$año no es bisiesto\n";
?>
