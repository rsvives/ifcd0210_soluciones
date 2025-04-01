<?php

function mostrarLista()
{
    //1) Leer contenido de compra.json ->file_get_contents('ruta_al_fichero') 
    //tip: igualar una variable a la función para guardar el texto en dicha variable
    $texto = file_get_contents('compra.json');

    //2) Convertir el contenido(string) a un array que pueda iterar -> json_decode($texto_del_json, true)

    $arrayCompra = json_decode($texto, true);


    //3) Iterar el array renderizando (pintando) el html pertinente 

    foreach ($arrayCompra as $key => $item) {
        echo "<p>$item[producto]: $item[precio]€<p>";
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
    <?php mostrarLista(); ?>
</body>

</html>