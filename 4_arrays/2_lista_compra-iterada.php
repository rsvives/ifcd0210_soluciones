<?php


/* 
Usando el mismo array del ejercicio anterior, 
iterarlo con un bucle for y hacer un echo del contenido del array

Opcional: Hacer lo mismo con un foreach

*/

$compra=["pan","agua","leche","carne"];

for($i=0;$i<count($compra);$i++){
    echo $compra[$i]."<br>";
}
echo "<hr>";

foreach ($compra as $item) {
    echo "<input type='checkbox'>".$item."<br>";
}
echo "<hr>";

$pares = [2,4,6,8,10,12];

foreach ($pares as $numero) {
   echo $numero;
    echo "<br>";
}