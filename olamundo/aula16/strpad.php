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
        $nome = "Guanabara";
        $novo = str_pad($nome,30," ",STR_PAD_RIGHT);
        echo "meu professor$novo é lindo";
    ?>
</div>    
</body>
</html>