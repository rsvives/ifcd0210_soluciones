<?php

echo "<pre>" . print_r($_POST, true) . "</pre>";


$email = $_POST['email'];
echo "Email introducido: $email <br>";

echo "Departamento seleccionado: $_POST[departamento] <br>";
