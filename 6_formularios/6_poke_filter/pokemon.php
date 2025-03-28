<?php


/**
 * Completar el fichero para que se muestren los pokemon del tipo indicado por parámetros de la url
 *  En caso de no indicar ningún tipo, mostrarlos todos
 * 
 */

$arrayPokemon = [
    [
        "id" => 1,
        "nombre" => "bulbasaur",
        "tipo" => "planta"
    ],
    [
        "id" => 2,
        "nombre" => "ivisaur",
        "tipo" => "planta"
    ],
    [
        "id" => 3,
        "nombre" => "venusaur",
        "tipo" => "planta"
    ],
    [
        "id" => 4,
        "nombre" => "charmander",
        "tipo" => "fuego"
    ],
    [
        "id" => 5,
        "nombre" => "charmeleon",
        "tipo" => "fuego"
    ],
    [
        "id" => 6,
        "nombre" => "charizar",
        "tipo" => "fuego"
    ],
    [
        "id" => 7,
        "nombre" => "squirtle",
        "tipo" => "agua"
    ],
    [
        "id" => 8,
        "nombre" => "wartortle",
        "tipo" => "agua"
    ],
    [
        "id" => 9,
        "nombre" => "blastoise",
        "tipo" => "agua"
    ],
];

function mostrarPokemon()
{
    global $arrayPokemon;
    echo "<ul>";
    foreach ($arrayPokemon as $key => $pokemon) {
        echo "<li>$pokemon[id]: $pokemon[nombre] | $pokemon[tipo] </li>";
    }
    echo "</ul>";
}



function filtrarPokemon($tipo)
{
    global $arrayPokemon;

    echo "Filtrando por tipo $tipo: todavía no implementado...";
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

    <?php
    if (!isset($_GET['tipo'])) {
        mostrarPokemon();
    } else {
        filtrarPokemon($_GET['tipo']);
    }
    ?>

</body>

</html>