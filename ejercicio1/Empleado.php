<?php


abstract class Empleado implements PruebaEmpleado
{


    //put your code here
    public $nombre;
    private $apellido;
    private $numeroCedula;


    /**
     * Empleado constructor.
     * @param $nombre
     * @param $apellido
     * @param $numeroCedula
     * @param $salarioBase
     */
    public function __construct($nombre, $apellido, $numeroCedula)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numeroCedula = $numeroCedula;

    }


    abstract function cobrarSalario();

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * @return mixed
     */
    public function getNumeroCedula()
    {
        return $this->numeroCedula;
    }

    /**
     * @param mixed $numeroCedula
     */
    public function setNumeroCedula($numeroCedula)
    {
        $this->numeroCedula = $numeroCedula;
    }





}
