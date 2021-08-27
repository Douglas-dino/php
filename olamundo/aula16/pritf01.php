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
        $p = "leite";
        $pr = "4.5";
        // "O $p custa R$". number_format($pr,2);
        printf("O %s está cuatando R$ %.2f", $p,$pr);
    ?>
</div>
</body>
</html>