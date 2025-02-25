<?php

$cadena1 = "hola";
$num_1 = rand(1, 4);
$num_2 = rand(1, 4);
$mayorDeEdad = false;

echo ($cadena1 . " mundo");
echo ("<br>");
echo ($num_1 . '+' .  $num_2 . '=' . $num_1 + $num_2);
echo ("<br>");
echo ($num_1 . '/' .  $num_2 . '=' . $num_1 / $num_2);
echo ("<br>");
echo ("el resto de dividir $num_1 entre $num_2 es" . $num_1 % $num_2);
echo ("<br>");
echo ($num_1 . '>' . $num_2  . ': ' . $num_1 > $num_2);
echo ("<br>");
echo (!$mayorDeEdad);

//otra modificacion super importante