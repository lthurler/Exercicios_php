<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercicio3.php" method="get">
Digite o primeiro numero:<br/>
<input type="text" name="numero1" id=""/>
<br/><br/>
Digite o segundo numero:<br/>
<input type="text" name="numero2" id=""/>
<br/><br/>
<input type="submit" value="Calcular">

</form>

<?php
    $n1 = $_GET["numero1"];
    $n2 = $_GET["numero2"];
    
    echo"soma : ".($n1+$n2)."<br>";
    



?>
    
</body>
</html>