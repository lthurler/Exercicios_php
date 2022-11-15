<?php
include "Pessoa.php";
class Aluno extends Pessoa{
    // public $nome;
    public $nota1;
    public $nota2;
    public $nota3;

    //seria aplicar o nome mais amigável para os parâmetros
    function __construct($nome, $n1, $n2, $n3){
        $this->nome = $nome;
        $this->nota1 = $n1;
        $this->nota2 = $n2;
        $this->nota3 = $n3;
    }
    
    function media(){
        return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
    }

    function add(){
        return "Salvo!";
    }

}
