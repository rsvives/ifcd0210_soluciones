<?php

/* 
    Similar al ejercicio anterior, pero en vez de crear una temperatura por día, en dos: 
    añadir una temperatura aleatoria entre 15-25 grados para la mañana (con la clave "mañana")
    y otra para la tarde entre 5-15 (con la clave "tarde")
    
    De esta manera tendremos un array en el que podríamos acceder a la clave "lunes" 
    y dentro del lunes podría acceder a "mañana" o "tarde" con y así para el resto de días de la semana

    [
        "lunes"=>[
            "mañana"=> 17,
            "tarde" => 8
        ],    
        "martes"=>[ ...],
        ...
    ]

    Una  vez creado: 
    - Probar a mostrar la temperatura del viernes por la tarde.
    - Iterarlo y mostrar el texto "el lunes por la mañana hay 17ºC, y por la tarde 8ºC, el martes por la mañana..."

*/


$semana = [
    "lunes",
    "martes",
    "miercoles",
    "jueves",
    "viernes",
    "sabado",
    "domingo"
];

$temperaturas = [];

foreach ($semana as $dia) {
    $temperaturas[$dia] = [
        'mañana' => rand(15, 25),
        'tarde' => rand(5, 15),
    ];
}

// var_dump($temperaturas);

foreach ($temperaturas as $dia => $momentos) {
    echo "La temperatura del $dia por la mañana es de " . $momentos['mañana'] . "ºC y por la tarde de " . $momentos['tarde'] . "ºC.";
    echo "<br>";
}

echo "<br>";
echo "<hr>";
echo "<br>";

//tabla HTML 😵

?>

<table border="1">
    <tr>
        <th>Día</th>
        <th>Mañana</th>
        <th>Tarde</th>
    </tr>
    <?php foreach ($temperaturas as $dia => $momentos) {
        echo ("<tr>");
        echo ("<td>$dia</td>");
        foreach ($momentos as $valor) {
            echo ("<td>$valor</td>");
        }
        echo ("</tr>");
    }  ?>
</table>