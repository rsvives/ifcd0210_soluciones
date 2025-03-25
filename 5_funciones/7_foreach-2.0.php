<?php

// Dado el siguiente array, hacer una lista de la compra

$compra = [
    [
        "nombre" => "arroz",
        "precio" => 2.99
    ],
    [
        "nombre" => "lechuga",
        "precio" => 1.05
    ],
    [
        "nombre" => "yogures",
        "precio" => 3.15
    ],
];

// var_dump($compra);

//opcionalmente se puede empezar con un bucle for, 
//pero el objetivo es hacerlo con un foreach

function crearLista($lista)
{
    foreach ($lista as $producto) {
        echo "<li>$producto[nombre]  -  $producto[precio]€</li>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php crearLista($compra); ?>
    </ul>

</body>

</html>