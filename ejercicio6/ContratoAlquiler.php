<?php

require_once 'Vehiculo.php';
require_once 'Persona.php';

class ContratoAlquiler
{
    private $fechaAlquiler;
    private $Vehiculo;
    private $Persona;
    private $alquileres = array();

    /**
     * ContratoAlquiler constructor.
     * @param $fechaAlquiler
     * @param $Vehiculo
     * @param $Persona
     */
    public function construct()
    {
        $this->Vehiculo = new Vehiculo();
        $this->Persona = new Persona();
    }

    /**
     * ContratoAlquiler constructor.
     * @param $fechaAlquiler
     * @param $Vehiculo
     * @param $Persona
     */


    /**
     * @return mixed
     */
    public function getFechaAlquiler()
    {
        return $this->fechaAlquiler;
    }

    /**
     * @param mixed $fechaAlquiler
     */
    public function setFechaAlquiler($fechaAlquiler)
    {
        $this->fechaAlquiler = $fechaAlquiler;
    }

    /**
     * @return Vehiculo
     */
    public function getVehiculo()
    {
        return $this->Vehiculo;
    }

    /**
     * @param Vehiculo $Vehiculo
     */
    public function setVehiculo($Vehiculo)
    {
        $this->Vehiculo = $Vehiculo;
    }

    /**
     * @return Persona
     */
    public function getPersona()
    {
        return $this->Persona;
    }

    /**
     * @param Persona $Persona
     */
    public function setPersona($Persona)
    {
        $this->Persona = $Persona;
    }

    /**
     * @return array
     */
    public function getAlquileres()
    {
        return $this->alquileres;
    }

    /**
     * @param array $alquileres
     */
    public function setAlquileres($alquileres)
    {
        $this->alquileres = $alquileres;
    }


    public function registrarAlquiler($fechaAlquiler, Vehiculo $vehiculo, Persona $persona)
    {
        $this->fechaAlquiler = $fechaAlquiler;
        $this->Vehiculo = $vehiculo;
        $this->Persona = $persona;
        $this->alquileres[]=$this->fechaAlquiler."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp".$this->getVehiculo()->getPlaca()."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp".$this->getVehiculo()->getKmActual()."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp".$this->getPersona()->getNombre();
    }

    public function mostrarAlquiler()
    {   echo "Fecha" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp" . "Placa" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp" . "Km" ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp"."Persona". "<br/><br/>";
        foreach ($this->getAlquileres() as $alquileres1) {
            echo $alquileres1."<br/>";
        }
    }


}