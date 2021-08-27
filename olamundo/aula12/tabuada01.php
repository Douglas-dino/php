<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada PHP</title>
</head>
<body>
<div>
    <form action="tabuada02.php" method="get">
        <label for="num">Numero</label>
        <select name="tab" id="num" style="width: 50px;"> 
        <?php 
            $c =1;
            do {
                 echo"<option value='$c'>$c</option><br>";
                $c++;
            } while ($c <= 10) 
        ?>
     </select> <input type="submit" value="Tabuada">
       
    </form><br>
    
</div>   
</body>
</html>