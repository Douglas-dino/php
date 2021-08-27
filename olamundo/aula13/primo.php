<!DOCTYPE html>
<html lang="ptr-br">
<head>
    <link rel="stylesheet" href="_css/estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP</title>
</head>
<body>
<div>
    <?php 
       $n = isset($_GET["num"])?$_GET["num"]:0;
       $div = 0;
       echo "Analisando o Número $n<br>";
       echo "Valores Multiplos: ";
       for($c = 1; $c <= $n; $c++) {
           $mod = $n % $c; // uso do modulo para saber se é divisivel
           if($mod == 0 && $c >= 1) {
               echo " $c ";
               $div++;
           }
       }
       echo "<br>Total de Multiplos$div";
       if($div == 2){
           echo "</br>$n <span>É NÚMERO PRIMO</span>.";
       }
       else{
           echo "</br>$n <span>NÃO É NÚMERO PRIMO</span>.";
       }
    ?>
</div>    
</body>
</html>