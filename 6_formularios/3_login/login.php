<?php
// primero comprobar si nos llegan datos por "post"
// var_dump($_POST);

// comprobar si los valores recibidos del formulario coinciden con los siguientes:
$user = 'admin';
$password = '$uper$ecr3t';

// si coinciden, redirigir a la página de bienvenida
// sino, redirigir a la página de error
// pista: la función header('Location: nombre_del_fichero.extension') sirve para redirigir
if ($user ===  $_POST['user'] && $password ===  $_POST['password']) {
    header("Location: bienvenida.php?user=" . $_POST['user']);
} else {
    header('Location: error.html');
}
