<?php
include "Pessoa.php";

class Funcionario extends Pessoa
{
    public $valor_hora;
    public $horas_trabalho;

    // function __construct($valor_hora, $horas_trabalho){
    //     $this->valor_hora = $valor_hora;
    //     $this->horas_trabalho = $horas_trabalho;
    // }

    function getSalario(){
        return ($this->horas_trabalho * $this->valor_hora);
    }
}
