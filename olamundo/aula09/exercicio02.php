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
        $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900 ;
        $idade= date("Y") -$a;
        echo " Você nasceu em $a.<br>";
        if($idade < 16) {
          $tipoVoto = "Proibido";  
        } 
        elseif(($idade >= 16 && $idade < 18) ||($idade > 65)) {
                $tipoVoto = " opcional";
        } else {
                $tipoVoto = "obrigatorio";
        }
        
        echo "Você tem $idade anos seu Voto é $tipoVoto";
    ?>
</div>    
</body>
</html>