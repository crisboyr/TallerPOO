<?php

class Venta {

    public $numeroVenta;
    public $comisionPorVenta;

    function __construct($numeroVenta, $comisionPorVenta) {
        $this->numeroVenta = $numeroVenta;
        $this->comisionPorVenta = $comisionPorVenta;
    }

    function getNumeroVenta() {
        return $this->numeroVenta;
    }

    function getComisionPorVenta() {
        return $this->comisionPorVenta;
    }

    function setNumeroVenta($numeroVenta) {
        $this->numeroVenta = $numeroVenta;
    }

    function setComisionPorVenta($comisionPorVenta) {
        $this->comisionPorVenta = $comisionPorVenta;
    }



}
?>