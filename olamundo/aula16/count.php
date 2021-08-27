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
       $frase = "Eu vou estudar PHP";
       $count= str_word_count($frase,0);
       echo $count;
    ?>
</div>
</body>
</html>