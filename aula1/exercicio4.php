<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercicio4.php" method="get">
Digite a primeira nota:<br/>
<input type="text" name="numero1" id=""/>
<br/><br/>
Digite a segunda nota:<br/>
<input type="text" name="numero2" id=""/>
<br/><br/>
Digite a terceira nota:<br/>
<input type="text" name="numero3" id=""/>
<br/><br/>
<input type="submit" value="Calcular">

</form>

<?php
    $n1 = $_GET["numero1"];
    $n2 = $_GET["numero2"];
    $n3 = $_GET["numero3"];
    
    echo"media : ".($n1+$n2+$n3)/3;
    



?>
    
</body>
</html>