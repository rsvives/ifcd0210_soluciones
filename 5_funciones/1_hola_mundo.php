<?php
/* 
    Crear una función que haga echo de "hola mundo!". Probar a llamarla múltiples veces
*/
function saludar (){
    echo "hola mundo!";
}

for ($i=0; $i < 4; $i++) { 
    saludar();
    echo "<br>";
}
?>