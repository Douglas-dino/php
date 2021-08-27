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
        $i = isset($_GET["i"]) ? $_GET["i"] : 0;
        $f = isset($_GET["f"]) ? $_GET["f"] : 0;
        $p = isset($_GET["p"]) ? $_GET["p"] : 0;

        $c = $i;
        while($c <= $f) {
            echo $c . "<br>";
           // $c= $c + $p;
           $c += $p;
        
        }

        
        $c = $i;
        while($c >= $f) {
            echo $c ."<br>";
            //$c= $c - $p;
            $c -= $p;
        } 

     ?>        
 </div>   
</body>
</html>