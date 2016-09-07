<?php

require_once 'Comision.php';
require_once 'Venta.php';

class Vendedor
{
    private $codigo;
    private $nombreVendedor;
    private $comision;
    private $ventas = array();
    const BASE=200;


    /**
     * Vendedor constructor.
     * @param $codigo
     * @param $nombreVendedor
     */
    public function __construct($codigo, $nombreVendedor)
    {
        $this->codigo = $codigo;
        $this->nombreVendedor = $nombreVendedor;
        $this->comision = new Comision();
    }

    /**
     * @return mixed
     */


    public function getCodigo()
    {
        return $this->codigo;
    }

    public function addVenta(Venta $venta)
    {
        $this->ventas[] = $venta;
    }

    /**
     * @param mixed $codigo
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * @return mixed
     */
    public function getNombreVendedor()
    {
        return $this->nombreVendedor;
    }

    /**
     * @param mixed $nombreVendedor
     */
    public function setNombreVendedor($nombreVendedor)
    {
        $this->nombreVendedor = $nombreVendedor;
    }

    /**
     * @return mixed
     */
    public function getComision()
    {
        return $this->comision;
    }

    /**
     * @param mixed $comision
     */
    public function setComision($comision)
    {
        $this->comision = $comision;
    }

    /**
     * @return array
     */
    public function getVentas()
    {
        return $this->ventas;
    }

    /**
     * @param array $ventas
     */
    public function setVentas($ventas)
    {
        $this->ventas = $ventas;
    }

    public function listar(){
        foreach($this->ventas as $unObjeto){
            print ' Fecha : '.$unObjeto->getFechaVenta().'<br />';
            print'Vendedor:'.$this->getNombreVendedor()."<br/>";
            print ''.$unObjeto->listarVentas().'<br />';



        }
    }



    public function calcularSueldo($comision){
         echo Vendedor::BASE+$comision."<br/><br/>";
    }
}