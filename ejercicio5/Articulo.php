<?php

class Articulo
{
    private $nombreProducto;
    private $precio;
    private $cantidad;

    /**
     * Articulo constructor.
     * @param $nombreProducto
     * @param $precio
     * @param $cantidad
     */
    public function __construct($nombreProducto, $precio, $cantidad)
    {
        $this->nombreProducto = $nombreProducto;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
    }

    /**
     * Articulo constructor.
     * @param $nombreProducto
     * @param $precio
     */


    /**
     * @return mixed
     */

    public function getNombreProducto()
    {
        return $this->nombreProducto;
    }

    /**
     * @param mixed $nombreProducto
     */
    public function setNombreProducto($nombreProducto)
    {
        $this->nombreProducto = $nombreProducto;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
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




}