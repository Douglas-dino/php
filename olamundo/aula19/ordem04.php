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
<pre>
    <?php 
        $v = array("A","J","M","X","K");
        print_r($v);
        sort($v); // põe em ordem o vetor.
        print_r($v);
        echo "põe em ordem o vetor<br>";
        asort($v);// oredena sem alterar o indice
        print_r($v);
        echo "põe o vetro em ordem sem alterar o indice <br>";
        rsort($v); // põe em ordem reversa.
        print_r($v);
       
    ?>
    </pre>
</div>    
</body>
</html>