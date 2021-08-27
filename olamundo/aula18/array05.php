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
        $v = array( "Nome" => "Ana",
                    "Idade" => 23,
                    "Peso" => 65.5);
        foreach($v as $k => $c) {
            echo "O campo $k possui o conteudo $c <br>";
        }            
    ?>
    </pre>
</div>    
</body>
</html>