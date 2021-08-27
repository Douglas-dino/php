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
<form action="tabuada02.php" method="get">
   Numero: <select name="tab">
        <?php 
            for($c = 1; $c <= 10; $c++){
                echo "<option>$c</opton>";
            }
        ?>
    </select>
    <input type="submit" value="Tabuada">
    </form>
</div>    
</body>
</html>