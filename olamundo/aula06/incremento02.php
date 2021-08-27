<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curso PHP</title>
</head>
<body>
<?php
/* Esse exercicio pretende demonstrar o uso de operadores de
incremento e decremento */
$atual = $_GET["aa"];
echo "O ano atual é $atual e o ano anterior é" . --$atual;

?>
</body>
</html>