<?php

require_once 'Pantalla.php';
class TelefonoFijo extends Llamada implements Pantalla
{

    private $valorMinuto;

    function __construct($valorMinuto,$numeroOrigen, $numeroDestino, $duracion) {
        parent::__construct($numeroOrigen, $numeroDestino, $duracion);
        $this->valorMinuto = $valorMinuto;
    }

    function getValorMinuto() {
        return $this->valorMinuto;
    }

    function setValorMinuto($valorMinuto) {
        $this->valorMinuto = $valorMinuto;
    }

    public function calcularValorLlamada() {

    }

    public function imprimirLlamadaPantalla() {

    }
}