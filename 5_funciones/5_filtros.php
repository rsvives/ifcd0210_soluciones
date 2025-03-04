<?php
/* 
Función "filtrar" que recibe un array de películas
y devuelve otro array con aquellas películas que pertenecen a un género especificado por parámetro


Función "mostrar" que recibe un array de películas 
y las muestra en sus correspondientes divs html como en  el ejercicio 7 del apartado 4_arrays

*/
$netflix = [
    [
        "titulo" => "El señor de los anillos",
        "año" => 2001,
        "director" => "Peter Jackson",
        "genero" => "fantasia"
    ],
    [
        "titulo" => "El gigante de hierro",
        "año" => 1999,
        "director" => "X",
        "genero" => "Sci-Fi"
    ],
    [
        "titulo" => "Alien",
        "año" => 1979,
        "director" => "Ridley Scott",
        "genero" => "Sci-Fi"
    ],
];


function filtrarPelis($pelisArray, $genero)
{
    $nuevoArray = [];
    foreach ($pelisArray as $peli) {
        if ($peli["genero"] === $genero) {
            array_push($nuevoArray, $peli);
        }
    }
    return $nuevoArray;
}


// $pelisFiltradas = filtrarPelis($netflix,'Sci-Fi');
$pelisFiltradas = array_filter($netflix, fn($peli) => $peli['genero'] === 'Sci-Fi');

function porDos($param)
{
    return $param * 2;
}

fn($param) => $param * 2;

var_dump($pelisFiltradas);



//esto es una prueba para hacer una PR
//esto es una prueba para hacer una PR