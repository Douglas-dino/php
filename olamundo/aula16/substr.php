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
        $site = "Curso em vídeo";
        $sub = substr($site,0,5);
        echo $sub;
    ?>
</div>    
</body>
</html>