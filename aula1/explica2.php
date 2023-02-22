<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="explica2.php" method="get">
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
    
    echo"numero1 : ".$n1."<br>";
    echo"numero2 : ".$n2."<br>";
    echo"==============================="."<br>";
    echo"soma : ".($n1+$n2)."<br>";
    echo"subtração : ".($n1-$n2)."<br>";
    echo"multiplicação : ".($n1*$n2)."<br>";
    echo"divisão : ".($n1/$n2)."<br>";




?>
    
</body>
</html>