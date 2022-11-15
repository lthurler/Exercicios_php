<?php
class Usuario {
    public $nome;
    public $sobrenome;
    public $senha;

    function __construct($nome, $sobrenome, $senha){
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->senha = $senha;
    }

    function add()
    {
        echo "Salvo!";
    }

    function get($id){
    }
}

function mv($variavel){
    echo "<pre>";
    var_dump($variavel);
    echo "</pre>";
}

$dadosGet = $_GET; //envio via get
$dadosPost = $_POST; //envio via post


$usuario = new Usuario($dadosPost["nome"], $dadosPost["sobrenome"], $dadosPost["senha"]);
$usuario->add();

mv($usuario);

//print_r($usuario);
?>