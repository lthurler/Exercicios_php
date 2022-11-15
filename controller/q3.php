<?php
include("../model/Aluno.php");

$dados = $_POST;

//var_dump($dados);

$aluno = new Aluno($dados['nome'], $dados['nota1'], $dados['nota2'], $dados['nota3']);

//var_dump($aluno);

echo "Media: " . $aluno->media();
echo "<br>";
echo "Banco de Dados: ".$aluno->add();