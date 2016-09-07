<?php

require_once 'Inmueble.php';

class Local extends Inmueble
{

    private $nombre;
    private $numeroVentanas;
    private $porcentaje;
    private $total;

    public function __construct($direccion, $numeroMetros, $aniosUso, $precioBase, $nombre, $numeroVentanas)
    {
        parent::__construct($direccion, $numeroMetros, $aniosUso, $precioBase);
        $this->nombre = $nombre;
        $this->numeroVentanas=$numeroVentanas;
    }

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
    public function getNumeroVentanas()
    {
        return $this->numeroVentanas;
    }

    /**
     * @param mixed $numeroVentanas
     */
    public function setNumeroVentanas($numeroVentanas)
    {
        $this->numeroVentanas = $numeroVentanas;
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
        if ($this->getNumeroMetros() >50 && $this->getAniosUso() <= 15 && $this->getNumeroVentanas()<=1) {
            $this->porcentaje =0.02;
            $this->total = $this->getPrecioBase()-$this->porcentaje * $this->getPrecioBase();
            $this->porcentaje = "Menos el 2%";
        }
        if ($this->getNumeroMetros()<50 && $this->getAniosUso()<=15 && $this->getNumeroVentanas()<=1 || $this->getNumeroMetros()>50 && $this->getAniosUso()>15 && $this->getNumeroVentanas()<=1) {
            $this->porcentaje = 0.03;
            $this->total = $this->getPrecioBase()-$this->porcentaje * $this->getPrecioBase();
            $this->porcentaje = "Menos el 3%";
        }

        if ($this->getNumeroMetros() >50 && $this->getAniosUso() <= 15 && $this->getNumeroVentanas()>4 || $this->getNumeroMetros() >50 && $this->getAniosUso() <= 15 && $this->getNumeroVentanas()>1 && $this->getNumeroVentanas()<=4) {
            $this->porcentaje =0;
            $this->total = $this->getPrecioBase()-$this->porcentaje * $this->getPrecioBase();
            $this->porcentaje = "0%";
        }

        if ($this->getNumeroMetros()<50 && $this->getAniosUso()<=15 && $this->getNumeroVentanas()>4 || $this->getNumeroMetros()>50 && $this->getAniosUso()>15 && $this->getNumeroVentanas()>4 || $this->getNumeroMetros()<50 && $this->getAniosUso()<=15 && $this->getNumeroVentanas()>1 && $this->getNumeroVentanas()<=4 || $this->getNumeroMetros()>50 && $this->getAniosUso()>15 && $this->getNumeroVentanas()>1 && $this->getNumeroVentanas()<=4) {
            $this->porcentaje = 0.01;
            $this->total = $this->getPrecioBase()-$this->porcentaje * $this->getPrecioBase();
            $this->porcentaje = "Menos el 1%";
        }

    }
}