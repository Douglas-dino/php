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
        $v[0] = 4;
        $v[1] = 8;
        $v[2] = 3;

        print_r($v);
        /* po-se usar estes dois comandos tambem: var_dump($v);
        var_export($v); */
        $v2 = array (3,7,6,2,1,9);
        //print_r($v2);
    ?>
</div>
</body>
</html>