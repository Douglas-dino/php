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
        print_r($v);
       //array_unshift($v, "O"); adiciona o elemento na primeira posição do vetor.
      array_shift($v); // elimina o elemento da primeira posição do vetor.
       print_r($v);
    ?>
    </pre>
</div>    
</body>
</html>