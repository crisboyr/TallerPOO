<?php


abstract class Llamada implements Pantalla
{
    private $numeroOrigen;
    private $numeroDestino;
    private $duracion;

    function __construct($numeroOrigen, $numeroDestino, $duracion) {
        $this->numeroOrigen = $numeroOrigen;
        $this->numeroDestino = $numeroDestino;
        $this->duracion = $duracion;
    }

    function getNumeroOrigen() {
        return $this->numeroOrigen;
    }

    function getNumeroDestino() {
        return $this->numeroDestino;
    }

    function getDuracion() {
        return $this->duracion;
    }

    function setNumeroOrigen($numeroOrigen) {
        $this->numeroOrigen = $numeroOrigen;
    }

    function setNumeroDestino($numeroDestino) {
        $this->numeroDestino = $numeroDestino;
    }

    function setDuracion($duracion) {
        $this->duracion = $duracion;
    }

}