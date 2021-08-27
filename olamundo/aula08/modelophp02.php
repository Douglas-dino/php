<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
<div>
    <?php
       $nome = isset ($_GET["nome"]) ? $_GET["nome"] : "[Não Informado]";
       $ano = isset($_GET["ano"]) ? $_GET["ano"] :0 ;
       $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Sem Sexo]";
       $idade = date("Y") - $ano;
       echo "$nome é $sexo e tem $idade anos";
    ?>
    <a href="modelo02.html">Voltar</a>
</div>
</body>
</html>