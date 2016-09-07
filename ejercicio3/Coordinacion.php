<?php

/**
 * Created by PhpStorm.
 * User: cristian
 * Date: 9/3/2016
 * Time: 1:57 PM
 */
class Coordinacion
{
    public $codigoCoordinacion;
    public $nombreCoordinacion;

    function __construct($codigoCoordinacion, $nombreCoordinacion) {
        $this->codigoCoordinacion = $codigoCoordinacion;
        $this->nombreCoordinacion = $nombreCoordinacion;
    }

    function getCodigoCoordinacion() {
        return $this->codigoCoordinacion;
    }

    function getNombreCoordinacion() {
        return $this->nombreCoordinacion;
    }

    function setCodigoCoordinacion($codigoCoordinacion) {
        $this->codigoCoordinacion = $codigoCoordinacion;
    }

    function setNombreCoordinacion($nombreCoordinacion) {
        $this->nombreCoordinacion = $nombreCoordinacion;
    }

}
?>