<?php
/* 
    Crear un array $dias con las siguientes claves: "lunes","martes", ..., "sábado", "domingo"

    Iterando ese array, crear otro array asociativo $temperaturas:
        - cuya clave es el día de la semana
        - el valor es un número aleatorio 

    Iterar $temperaturas, mostrando el texto "la temperatura del lunes es X ºC, ..."

    Pista: el método push() puede resultar útil para añadir elementos a un array nuevo
*/

$dias = [
    "lunes",
    "martes",
    "miercoles",
    "jueves",
    "viernes",
    "sabado",
    "domingo"
];



$temperaturas = [];


// pruebas varias:
// $dias[3]="carnaval(*/ω＼*)";

// $temperaturas["kahoot"]="chachi";
// $temperaturas[0]=$dias[3];
// $temperaturas[$dias[4]] = "por fin!!";

// var_dump($dias);
// var_dump($temperaturas);


for ($i = 0; $i < count($dias); $i++) {
    // echo $dias[$i];
    // echo "<br>";
    $temperaturas[$dias[$i]] = rand(5, 15);
}

// print_r($dias);
// echo "<br>";
// print_r($temperaturas);

echo "<hr>";

foreach ($dias as $d) {
    // echo $d;
    $temperaturas[$d] = rand(5, 15);

    // ^ esto es equivalente a :
    // $temperaturas["lunes"]= 13;
    // $temperaturas["martes"]= 15;
    // ...

}

// var_dump($temperaturas);

foreach ($temperaturas as $dia => $grados) {
    echo "el $dia hace $grados ºC <br>";
}
