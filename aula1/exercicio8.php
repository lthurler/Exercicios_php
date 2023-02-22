<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercicio8.php" method="get">
Digite a temperatura em graus Farenheit:<br/>
<input type="text" name="numero1" id=""/>
<br/><br/>
<input type="submit" value="Calcular">

</form>

<?php
    $n1 = $_GET["numero1"];
        
    echo"a temperatura em Celsius é : ".(5*($n1-32)/9);
    



?>
    
</body>
</html>