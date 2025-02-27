
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr{
            background-color: grey;
        }
        tr:nth-child(2n+1){
            background-color: red;
        }
    </style>
</head>
<body>
<?php

$numero=7;
?>
<table border="1">
<tr>
    <th>Operadores</th>
    <th>Resultado</th>
</tr>
<?php

for ($i=1; $i <=10 ; $i++) { 
    $resultado= $numero*$i;
    echo "<tr><td>$numero x $i</td> <td>$resultado</td> </tr>";
}
?>
</table>
</body>
</html>

