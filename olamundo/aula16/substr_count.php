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
        $frase = "Estou aprendendo PHP no Curso em vídeo de PHP";
        $cont = substr_count($frase,"PHP");
        echo " PHP encontrado $cont vezes ";
    ?>
</div>    
</body>
</html>