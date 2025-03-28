<?php

//opcional: recibir el nombre del usuario por url
//pista: añadir el parametro como parametro opcional de la url(nombre del fichero) en la función header("Location: ...")
$usuario = '';
if (isset($_GET['user'])) {
    $usuario = $_GET['user'];
}

//alternativamente se puede hacer así (con una ternaria):
// $usuario = isset($_GET['user']) ? $_GET['user'] : '';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>6_Formularios: 3.Login</title>
</head>

<body>

    <h1>Bienvenid@ usuario: <?= $usuario ?></h1>

</body>

</html>