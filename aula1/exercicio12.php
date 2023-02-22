<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="exercicio12.php" method="get">
Digite a altura de uma pessoa:<br/>
<input type="number" name="numero1" id=""/>
<br/><br/>
<input type="submit" value="Calcular">

</form>

<?php
    $n1 = $_GET["numero1"];
        
    echo"seu peso ideal para homem é : ".((72.7*$n1)-58)."<br>";
    echo"seu peso ideal para mulher é : ".(62.1*$n1)-44.7;
    
    



?>
    
</body>
</html>