<?php
$Num1 = 5;
$Num2 = 10;
echo "La suma de $Num1 + $Num2 es: " . ($Num1 + $Num2) . "<br>";
echo "La resta de $Num1 - $Num2 es: " . ($Num1 - $Num2) . "<br>";
echo "La multiplicación de $Num1 * $Num2 es: " . ($Num1 * $Num2) . "<br>";
echo "La división de $Num1 / $Num2 es: " . ($Num1 / $Num2) . "<br>";
?>

<?php
$base = 8;
$altura = 6;
$area = ($base * $altura) / 2;

echo "Área del triángulo: $area";
?>

<?php
$nota1 = 80;
$nota2 = 75;
$nota3 = 90;
$nota4 = 60;
$nota5 = 85;

$promedio = ($nota1 + $nota2 + $nota3 + $nota4 + $nota5) / 5;
echo "Promedio: $promedio";
?>

<?php
$dolares = 100;
$tasa = 24.5; // ejemplo de tasa de cambio
$lempiras = $dolares * $tasa;

echo "$dolares dólares son L. $lempiras lempiras";
?>

<?php
$millas = 10;
$km = $millas * 1.60934;
$metros = $km * 1000;

echo "$millas millas son $km km o $metros metros";
?>

<?php
$horas = 2;
$minutos = $horas * 60;
$segundos = $minutos * 60;

echo "$horas horas son $minutos minutos o $segundos segundos";
?>

<?php
$nota = 68;

if ($nota > 70) {
    echo "Aprobado";
} elseif ($nota >= 50 && $nota <= 70) {
    echo "Requiere mejora";
} else {
    echo "Reprobado";
}
?>
