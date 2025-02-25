<?php
$random = rand(1,100);

if($random > 50){
    $text = "cara";
    $color = "red";
} else{
    $text = "cruz";
    $color = "blue";
}

// esto es una ternaria
// $text = $random > 50 ? "cara" : "cruz";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</tit
    le>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cara o cruz</h1>
    <p class="<?=$color?>"><?= $text?></p>
</body>
</html>