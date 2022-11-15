<?php
include("../model/Temperatura.php");

$dados = $_POST;

$temperatura = new Temperatura();

$temperatura->celsius = $dados['celsius'];
//$temperatura->farenheit = $dados['farenheit'];

echo "farenheit: " . $temperatura->tranformaFarenheit();