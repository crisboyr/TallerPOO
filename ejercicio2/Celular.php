<?php

require_once 'ZonaHoraria.php';

class Celular
{
    private $valorMinuto;
    /**
     *
     * @var ZonaHoraria
     */
    private $zonaHoraria;

    function __construct($valorMinuto,$numeroOrigen, $numeroDestino, $duracion) {
        parent::__construct($numeroOrigen, $numeroDestino, $duracion);
        $this->valorMinuto = $valorMinuto;
        $this->zonaHoraria->calcularValorLlamada();
    }

    function getValorMinuto() {
        return $this->valorMinuto;
    }

    function setValorMinuto($valorMinuto) {
        $this->valorMinuto = $valorMinuto;
    }
}
?>