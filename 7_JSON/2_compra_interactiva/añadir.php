<?php

// Sacar el producto y el precio de $_POST
$productName = $_POST['producto'];
$price = $_POST['precio'];


$objeto = [

    "producto" => $productName,
    "precio" => $price,
];
// Sacar el contenido de compra.json (es un string)

$compraTexto = file_get_contents('compra.json');

// var_dump($compraTexto);
// Convertir el contenido de compra.json de string a un array  (json_decode(...))
$compraJSON = json_decode($compraTexto, true);


// Hacer push a dicho array del objeto que contiene el producto y el precio (ojo: respetar la misma estructura que cada objeto del json)
// echo "<pre>" . print_r($compraJSON, true) . "</pre>";
array_push($compraJSON, $objeto);
// echo "<pre>" . print_r($compraJSON, true) . "</pre>";



// Reconvertir el fichero a string (json_enconde())
$nuevoJSONTexto = json_encode($compraJSON, JSON_UNESCAPED_UNICODE);
// Introducir el texto en el fichero compra.json -> esto no va a funcionar si todos los ficheros de la carpeta tienen permisos de lectura y escritura (buscar en google)

file_put_contents('./compra.json', $nuevoJSONTexto);


header('Location: index.php');
