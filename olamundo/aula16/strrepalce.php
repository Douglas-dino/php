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
        $frase = "Gosto de estudar Matemática, Matemática é muito legal";
        $nova = str_replace("Matemática","PHP",$frase);
        echo $nova;
    ?>
</div>    
</body>
</html>