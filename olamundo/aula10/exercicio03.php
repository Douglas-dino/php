<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        span {
            color: orangered;
            text-shadow: 1px 1px 1px rgba(0,0,0,.3);
        }
    </style>
    <link rel="stylesheet" href="_css/estilo.css"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
<div>
    <?php 
        $est = isset($_GET["e"]) ? $_GET["e"] : 0;
        switch ($est) {
            case "no":
                $reg = "Região Norte";
                break;
            case "nord":
                $reg = "Região Nordeste";
                break;
            case "co":
                $reg = "Região Centro Oeste";
                break;
            case "sud":
                $reg = "Região Sudeste";
                break;
            case "sul":
                $reg = "Região sul";             
        }
        echo " Você Mora na <span>$reg</span> ";
       ?>
    <a href="javascript:history.go(-1)" >Voltar</a>
</div>
</body>
</html>