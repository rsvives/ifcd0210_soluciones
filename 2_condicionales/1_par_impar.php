<?php
/* 
Crear un fichero que muestre un número aleatorio entre 1 y 100 y que además diga si es par o impar

utilizad constantes para el mínimo y el máximo

define(nombre,valor)

*/

define('minimo',1);
define("maximo",100);

$numero = rand(minimo, maximo);

echo $numero;

// if($numero % 2 == 0){
//     echo " Par";
// }else echo " Impar";

$var = $numero % 2 == 0 ? " Par" : " Impar";
echo $var;
