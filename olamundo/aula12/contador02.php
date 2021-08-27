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
        $c = 10;
        do {
            echo " $c ";
            $c -- ;
        } while($c >= 1);
    ?>    
</div>    
</body>
</html>