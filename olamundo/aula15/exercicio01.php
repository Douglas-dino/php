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
        function teste(&$x) { // function teste($x) passagem por valor
            $x += 2 ;
            echo "<p>O valor de X é $x</p>";
        }

        $a = 3;
        teste($a);
        echo "<p>O valor de A é $a</p>";
    ?>
</div>    
</body>
</html>