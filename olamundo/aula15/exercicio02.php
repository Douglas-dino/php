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
        include "funcoes.php"; //require recomendado caso seja essencial carrega esse arquivo;
        echo "<h1>Testando novas funções</h1>";
        ola();
        mostraValor(4);
        echo "<h2>Finalizando programa...</h2>";
    ?>
</div>    
</body>
</html>