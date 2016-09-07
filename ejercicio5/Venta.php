<?php

require_once'Articulo.php';
class Venta
{
    private $fechaVenta;
    private $articulos=array();
    private $totalVenta;

    /**
     * Venta constructor.
     * @param $fechaVenta
     * @param array $articulos
     */
    public function __construct($fechaVenta)
    {
        $this->fechaVenta = $fechaVenta;

    }

    /**
     * Venta constructor.
     * @param $fechaVenta
     * @param array $articulos
     */


    /**
     * Venta constructor.
     * @param $fechaVenta
     * @param $cantidad
     * @param array $articulos
     * @param $totalVenta
     */


    /**
     * @return mixed
     */


    public function addArticulo(Articulo $articulo){
        $this->articulos[]=$articulo;
    }
    public function getFechaVenta()
    {
        return $this->fechaVenta;
    }

    /**
     * @param mixed $fechaVenta
     */
    public function setFechaVenta($fechaVenta)
    {
        $this->fechaVenta = $fechaVenta;
    }

    /**
     * @return mixed
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * @param mixed $cantidad
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    /**
     * @return mixed
     */
    public function getTotalVenta()
    {
        return $this->totalVenta;
    }

    /**
     * @param mixed $totalVenta
     */
    public function setTotalVenta($totalVenta)
    {
        $this->totalVenta = $totalVenta;
    }

    /**
     * @return array
     */
    public function getArticulos()
    {
        return $this->articulos;
    }

    /**
     * @param array $articulos
     */
    public function setArticulos($articulos)
    {
        $this->articulos = $articulos;
    }

    public  function listarVentas(){
        foreach($this->getArticulos() as $obj){
            echo "Producto: ".$obj->getNombreProducto()."<br/>";
            echo  "Cantidad: ".$obj->getCantidad()."<br/>";
            echo "Valor: $".$obj->getPrecio()."<br/>" ;
            $this->calcularTotal($obj->getPrecio(),$obj->getCantidad());
        }
        echo "Total: $".$this->totalVenta;

    }

    public function calcularTotal($precio,$cantidad){
        $this->totalVenta+=$precio*$cantidad;

    }



}