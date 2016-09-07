<?php

require_once 'Persona.php';
abstract class Empleado extends Persona {

    private $anioIncorporacion;

    function __construct($nombres, $apellidos, $dni, $estadoCivil,$anioIncorporacion) {
        parent::__construct($nombres, $apellidos, $dni, $estadoCivil);
        $this->anioIncorporacion = $anioIncorporacion;
    }

    function getAnioIncorporacion() {
        return $this->anioIncorporacion;
    }

    function setAnioIncorporacion($anioIncorporacion) {
        $this->anioIncorporacion = $anioIncorporacion;
    }


}
