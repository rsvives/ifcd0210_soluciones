<?php
 /* 
    Crear una función suma que reciba dos números como parámetros
    y muestra por pantalla su suma con un echo

    Hacer otra versión de la función, pero esta vez tiene que devolver el valor
     
 */


 function suma($num1,$num2){
   $result = $num1+$num2;
   return "la suma es $result <br>";
 }

$num1=3;
$numero2=6;
 

echo suma($num1,$numero2);


$resultado = suma(2,5);
echo $resultado;