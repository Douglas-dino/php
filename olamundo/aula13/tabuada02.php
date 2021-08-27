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
        $v = isset($_GET["tab"]) ? $_GET["tab"] : 1;
        for($c = 1; $c <= 10; $c++) {
            $r = $v * $c;
            echo " $v X $c =  $r <br><br>";
        }
    ?>
    <a href="javascript:history.go(-1)">Voltar</a>
</div>    
</body>
</html>