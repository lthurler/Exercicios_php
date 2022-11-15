<?php
include("../model/Funcionario.php");

$dados = $_POST;

//$funcionario = new Funcionario($dados['valor_hora'], $dados['horas_trabalho']);

$funcionario = new Funcionario();

$funcionario->valor_hora = $dados['valor_hora'];
$funcionario->horas_trabalho = $dados['horas_trabalho'];
$funcionario->nome = $dados["nome"];
$funcionario->cpf = $dados["cpf"];
$funcionario->endereco = $dados["endereco"];

var_dump($funcionario);
echo "Salario: " . $funcionario->getSalario();