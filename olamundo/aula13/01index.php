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
        for($c = 1; $c <= 10; $c++) {
            echo " $c  " ;
        }
        echo "<br>";
        for ($c = 10; $c >= 1; $c--) {
            echo " $c ";
        }
        echo "<br>";
        for ($c = 0; $c <= 50; $c += 5) {
            echo " $c ";
        }
        echo "<br>";
        for($c = 20; $c >= 0; $c-=2) {
            print " $c ";
        }
    ?>
</div>    
</body>
</html>