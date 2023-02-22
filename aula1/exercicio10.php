<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercicio10.php" method="get">
Digite o primeiro numero inteiro:<br/>
<input type="text" name="numero1" id=""/>
<br/><br/>
Digite o segundo numero inteiro:<br/>
<input type="text" name="numero2" id=""/>
<br/><br/>
Digite um numero real:<br/>
<input type="text" name="numero3" id=""/>
<br/><br/>
<input type="submit" value="Calcular">

</form>

<?php
    $n1 = $_GET["numero1"];
    $n2 = $_GET["numero2"];
    $n3 = $_GET["numero3"];
    
    echo"o produto do dobro do primeiro com metade do segundo : ".($n1*2)*($n2/2);
    echo"a soma do triplo do primeiro com o terceiro : ".($n1*3)+$n3;
    echo"o terceiro elevado ao cubo : ".($n3**3);
0    



?>
    
</body>
</html>