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
        $d = isset($_GET["ds"]) ? $_GET["ds"] : 0;
        switch ($d) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levanta e vai estudar seu vagabundo! :)";
                break;
            case 7:
            case 8:
                echo "Descanse, babaca! ;)";
                break;
            default:
                echo "Dia da Semana Invalido!";    
        }
    ?>
    <a href="javascript:history.go(-1)" >Voltar</a>
</div>
</body>
</html>