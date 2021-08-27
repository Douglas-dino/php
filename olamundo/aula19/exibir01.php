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
        $v = array("A","J","M","X","k");
        $tot = count($v);
        echo "O vetor tem $tot elementos <br>";
        print_r($v); // este comando só mostra o vetor para o Dev.
       // var_dump($v);  este codigo mostra o vetor, tipos e quntidades de elementos. 
    ?>
    </pre>
</div>    
</body>
</html>