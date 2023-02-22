<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercicio2.php" method="get">
    Digite o primeiro numero:<br/>
    <input type="text" name="numero1" id=""/>
    <br/><br/>
    <input type="submit" value="Mostrar">
</form>

<?php
    $n1 = $_GET["numero1"];    
    echo"O numero é : ".$n1."<br>";
    



?>
    
</body>
</html>