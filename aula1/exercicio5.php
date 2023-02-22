<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercicio5.php" method="get">
Digite a quantidade de metros para conversão em cm:<br/>
<input type="text" name="numero1" id=""/>
<br><br>
<input type="submit" value="Calcular">

</form>

<?php
    $n1 = $_GET["numero1"];
        
    echo "centimetros :".$n1*100;
    



?>
    
</body>
</html>