<?php

/* 
Realizar una agenda:
Guardar en un array asociativo el nombre de la persona como clave y su número como valor

["clave" => "valor", ....]

una vez hecho, mostrar el texto "X tiene el número 6666666"

*/

$agenda = [
    "pelayo" => 666666666,
    "mónica" => 55555555,
    "guillermo" => 444455555,
    "marta" => 876876876,
];

foreach ($agenda as $nombre => $tfono) {
    echo ("$nombre : $tfono");
    echo "<br>";
}
//aqui voy a añadir una linea de prueba