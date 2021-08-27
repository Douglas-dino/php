<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <?php 
        $v = isset($_GET["val"]) ? $_GET["val"] : 1;
        echo " <h1>Calculando o fatorial de $v</h1> ";
        $fat = 1;
        $c = $v;
        do {
            $fat = $fat * $c;
            $c--;
        } while ($c >= 1);
            echo "<h2> $v ! = $fat</h2>";
    ?>
    <a href="exercicio03.html">Voltar</a>
</div>   
</body>
</html>