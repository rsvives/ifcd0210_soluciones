<?php


// comprobar si los valores recibidos del formulario coinciden con los siguientes:
$user = 'admin';
$password = '$uper$ecr3t';

// si coinciden, redirigir a la página de bienvenida
// sino, redirigir a la página de error
// pista: la función header('Location: nombre_del_fichero.extension') sirve para redirigir