<?php
/* 
    Crear una función por cada operación básica: suma, resta, multiplicación y división
    Probar individualmente cada función para ver si funcionan correctamente (cuidado con dividir entre 0)

    Una vez hechas, hacer una función que reciba 3 parámetros (numero1, numero2 y operación a realizar):
    Si la función recibe la operación "+", ha de llamar a la función "suma" creada con anterioridad con los números recibidos.
    de igual manera ha ocurrir si recibe la operación "-", "*" y "/"
    Si la operación no es ninguna de las anteriores, se ha de mostrar un mensaje de error: "Operación desconocida"

*/

function sumar($num1, $num2)  {
    return $num1+$num2;
}

function restar($num1, $num2)  {
    return $num1-$num2;
}

function multiplicar($num1, $num2)  {
    return $num1*$num2;
}

function dividir($num1, $num2)  {
    if($num2 === 0) return "error: no se puede dividir entre 0";
    return $num1/$num2;
    // ternaria
    //return $num2===0? "error: no se puede dividir por 0" : $num1/$num2;

}

function calculadora($numero1,$numero2, $operacion){

    switch ($operacion) {
        case '+':
           $resultado = sumar($numero1,$numero2);
            break;
        case '-':
           $resultado = restar($numero1,$numero2);
            break;
        case '*':
           $resultado = multiplicar($numero1,$numero2);
            break;
        case '/':
           $resultado = dividir($numero1,$numero2);
            break;
        
        default:
           $resultado = "operación desconocida";
            break;
    }

    return $resultado;
}

echo calculadora(5,0,'/');