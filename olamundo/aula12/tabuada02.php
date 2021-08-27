<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        span {
            font-size: 15pt;
        }

        span#m {
            color: blue;
        }
    </style>
    <link rel="stylesheet" href="_css/estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada PHP</title>
</head>
<body>
<div>
    <?php 
        $v = isset($_GET["tab"]) ? $_GET["tab"] : 1;
        $mul = 1;
        $c = 1;
        do{
            $mul = $v * $c;
            echo"<span>$v X $c=</span> <span id='m'>$mul</span> "."<br><br>";
            
        $c++;
    } while ($c <= 10);
    

       
    ?>
    <a href="tabuada01.php">Voltar</a>
</div>   
</body>
</html>