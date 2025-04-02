<?php

// leer pelis.json
$texto = file_get_contents('pelis.json');
//convertir pelis.json a array
$arrayPelis = json_decode($texto, true);
//iterar y mostrar dicho array


foreach ($arrayPelis as $key => $peli) {
    echo "$peli[titulo] <br>";
    echo "directed by: $peli[director] <br>";
    foreach ($peli['generos'] as $key => $genero) {
        echo "$genero,";
    }
    echo "<br><br>";
}

//Opcionales:

// 1) añadir CSS (flexbox, formato tarjetitas, donde los géneros pueden ser badges)
// 2) formulario de filtro por género  (pista: utilizar función in_array())
// 3) Repetir el ejercicio pero sólo con JavaScript
// 4) Filtrado dinámico de las películas
