<?php
class Temperatura
{
    public $celsius;
    public $farenheit;

       function tranformaCelcius(){
        return (($this->farenheit - 32) * 5 / 9);
    }
    function tranformaFarenheit(){
        return (($this->celsius * 9) / 5 + 32);
    }
}
