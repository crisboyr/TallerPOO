<?php

require_once'Avaluo.php';
abstract class Inmueble implements Avaluo
{
    private $direccion;
    private $numeroMetros;
    private $aniosUso;
    private $precioBase;

    /**
     * Inmueble constructor.
     * @param $direccion
     * @param $numeroMetros
     * @param $aniosUso
     * @param $precioBase
     */
    public function __construct($direccion, $numeroMetros, $aniosUso, $precioBase)
    {
        $this->direccion = $direccion;
        $this->numeroMetros = $numeroMetros;
        $this->aniosUso = $aniosUso;
        $this->precioBase = $precioBase;
    }

    /**
     * Inmueble constructor.
     * @param $direccion
     * @param $numeroMetros
     * @param $precioBase
     */



    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @return mixed
     */
    public function getNumeroMetros()
    {
        return $this->numeroMetros;
    }

    /**
     * @param mixed $numeroMetros
     */
    public function setNumeroMetros($numeroMetros)
    {
        $this->numeroMetros = $numeroMetros;
    }

    /**
     * @return mixed
     */
    public function getPrecioBase()
    {
        return $this->precioBase;
    }

    /**
     * @param mixed $precioBase
     */
    public function setPrecioBase($precioBase)
    {
        $this->precioBase = $precioBase;
    }

    /**
     * @return mixed
     */
    public function getAniosUso()
    {
        return $this->aniosUso;
    }

    /**
     * @param mixed $aniosUso
     */
    public function setAniosUso($aniosUso)
    {
        $this->aniosUso = $aniosUso;
    }


}