<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
<div>
    <?php
        $a = 3;
        $b = "3";
        $r = ($a === $b) ? "SIM" : "NÃO";
        echo "As variaveis A e B são iguais? $r";
    ?>
</div>    
</body>
</html>