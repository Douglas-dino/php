<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="stylesheet" href="_css/estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
<div>
    <?php 
        $frase = "Estou aprendendo PHP";
        $pos = strpos($frase,"PHP");
        echo "$frase <br>A string foi encontrada na posição $pos";
    ?>
</div>    
</body>
</html>