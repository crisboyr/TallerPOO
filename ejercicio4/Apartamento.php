<?php

require_once 'Inmueble.php';

class Apartamento extends Inmueble
{
    private $nombre;
    private $numeroPiso;
    private $porcentaje;
    private $total;


    /**
     * @return mixed
     */

    public function __construct($direccion, $numeroMetros, $aniosUso, $precioBase, $nombre, $numeroPiso)
    {

        parent::__construct($direccion, $numeroMetros, $aniosUso, $precioBase);
        $this->nombre = $nombre;
        $this->numeroPiso = $numeroPiso;
    }

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
    public function getNumeroPiso()
    {
        return $this->numeroPiso;
    }

    /**
     * @param mixed $numeroPiso
     */
    public function setNumeroPiso($numeroPiso)
    {
        $this->numeroPiso = $numeroPiso;
    }

    /**
     * @return mixed
     */
    public function getPorcentaje()
    {
        return $this->porcentaje;
    }

    /**
     * @param mixed $porcentaje
     */
    public function setPorcentaje($porcentaje)
    {
        $this->porcentaje = $porcentaje;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }




    public function calculaValor()
    {
        if ($this->getNumeroPiso() >= 3 && $this->getAniosUso() <= 15) {
            $this->porcentaje = 0.02;
            $this->total = $this->getPrecioBase() + $this->porcentaje * $this->getPrecioBase();
            $this->porcentaje = "Mas el 2%";
        }
        if($this->getNumeroPiso()>=3 && $this->getAniosUso()>15){
            $this->porcentaje=0.01;
            $this->total=$this->getPrecioBase()+$this->porcentaje*$this->getPrecioBase();
            $this->porcentaje="Mas el 1%";
        }
        if ($this->getNumeroPiso()<3 && $this->getAniosUso() <=15) {
            $this->porcentaje=0.01;
            $this->total=$this->getPrecioBase()-$this->porcentaje*$this->getPrecioBase();
            $this->porcentaje="Menos el 1%";
        }
        if ($this->getNumeroPiso()<3 && $this->getAniosUso()>15) {
            $this->porcentaje=0.02;
            $this->total=$this->getPrecioBase()-$this->porcentaje*$this->getPrecioBase();
            $this->porcentaje="Menos el 2%";
        }
    }
}