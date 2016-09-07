<?php
abstract class Persona
{
    public $nombres;
    public $apellidos;
    public $dni;
    public $estadoCivil;

    function __construct($nombres, $apellidos, $dni, $estadoCivil)
    {
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->dni = $dni;
        $this->estadoCivil = $estadoCivil;
    }

    function getNombres()
    {
        return $this->nombres;
    }

    function getApellidos()
    {
        return $this->apellidos;
    }

    function getDni()
    {
        return $this->dni;
    }

    function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    function setNombres($nombres)
    {
        $this->nombres = $nombres;
    }

    function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    function setDni($dni)
    {
        $this->dni = $dni;
    }

    function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;
    }
}
?>