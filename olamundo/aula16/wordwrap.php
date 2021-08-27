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
      $t = "Aqui temos um texto gigante criado pelo PHP e vai mostrar o funcionamento do wordwrap";
      $r = wordwrap($t,5,"<br>\n", true);//ou false
      echo $r;
    ?>
</div>
</body>
</html>