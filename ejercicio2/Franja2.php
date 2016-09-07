<?php

require_once 'ZonaHoraria.php';
class Franja2 implements ZonaHoraria
{

    //put your code here
    private $valor;

    function __construct($valor)
    {
        $this->valor = $valor;
    }

    function getValor()
    {
        return $this->valor;
    }

    function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function calcularValorLlamada()
    {

    }

    public function imprimirLlamadaPantalla()
    {

    }
}

?>