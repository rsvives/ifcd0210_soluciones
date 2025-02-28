<?php

/* 
Dado un array con la temperatura media de  cada día de la semana, sacar:
 - la temperatura máxima, 
 - la mínima 
 - y la temperatura media

*/


$temperaturas = [12, 15, 13, 12, 16, 13, 13];

var_dump($temperaturas);
echo "<br>";

$max = 0;
$min = 100;
$sum = 0;

for ($i = 0; $i < count($temperaturas); $i++) {

    if ($temperaturas[$i] > $max) $max = $temperaturas[$i];
    if ($temperaturas[$i] < $min) $min = $temperaturas[$i];
    // $sum = $sum + $temperaturas[$i];
    $sum += $temperaturas[$i];
}
$media = $sum / count($temperaturas);

// Otra forma (foreach):
// foreach ($temperaturas as $t) {
//     if ($t > $max) $max = $t;
//     if ($t < $min) $min = $t;
//     $sum += $t;
// }
// $media = $sum / count($temperaturas);


// Forma pro:
// $max = max($temperaturas); //función predefinida max, que devuelve el máximo de un array
// $min = min($temperaturas);  // lo mismo pero con el mínimo
// $media = array_sum($temperaturas) / count($temperaturas);  //array_sum es una función que devuelve la suma de los elementos del array





echo "el maximo es $max <br>";
echo "el minimo es $min <br>";
echo "la media es " . $media . " <br>";
echo "la media es " . round($media, 2) . " <br>";
echo "la media es " . number_format($media, 2) . " <br>";
