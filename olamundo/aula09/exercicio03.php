<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css">
    <style>
        span.n1 {
            color: red;
            font-size: 15pt;
            text-shadow: 1px 1px black;
            
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
<div>    
    <?php
        $a = isset($_GET["nota1"]) ? $_GET["nota1"] : "Valor invalido";
        $b = isset($_GET["nota2"]) ? $_GET["nota2"] : "Valor invalido";
        $media = ($a +$b)/2;
        echo " A média entre <span class='n1'>$a</span> e <span class='n1'>$b</span> é <span class='n1'>$media</span>.<br>";

        if($media <5) {
            $situacao = "Reprovado";
        }
        elseif($media = 5 && $media < 7) {
            $situacao = "Recuperação";
        }
        else {
            $situacao ="Aprovado";
        }
            echo " A situação do alono é <span class='n1'>$situacao</span>."
       
    ?>
</div>    
</body>
</html>