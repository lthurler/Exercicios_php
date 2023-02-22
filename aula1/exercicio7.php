<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercicio7.php" method="get">
Digite quanto ganha por hora:<br/>
<input type="text" name="numero1" id=""/>
<br/><br/>
Digite quantas horas trabalhou no mês<br/>
<input type="text" name="numero2" id=""/>
<br/><br/>
<input type="submit" value="Calcular">

</form>

<?php
    $n1 = $_GET["numero1"];
    $n2 = $_GET["numero2"];
    
    
    echo"seu salário desse mês é : ".($n1*$n2);
    



?>
    
</body>
</html>