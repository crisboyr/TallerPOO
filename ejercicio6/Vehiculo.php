<?php


class Vehiculo
{
    private $placa;
    private $kmActual;
    private $color;
    private $marca;
    private $vehiculos = array();

    /**
     * Vehiculo constructor.
     * @param $placa
     * @param $kmActual
     * @param $color
     * @param $marca
     */
    public function __construct($placa, $kmActual, $color, $marca)
    {
        $this->placa = $placa;
        $this->kmActual = $kmActual;
        $this->color = $color;
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */


    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * @param mixed $placa
     */
    public function setPlaca($placa)
    {
        $this->placa = $placa;
    }

    /**
     * @return mixed
     */
    public function getKmActual()
    {
        return $this->kmActual;
    }

    /**
     * @param mixed $kmActual
     */
    public function setKmActual($kmActual)
    {
        $this->kmActual = $kmActual;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    /**
     * @return array
     */
    public function getVehiculos()
    {
        return $this->vehiculos;
    }

    /**
     * @param array $vehiculos
     */
    public function setVehiculos($vehiculos)
    {
        $this->vehiculos = $vehiculos;
    }


    public function registrarVehiculo(Vehiculo $vehiculo)
    {
        $this->vehiculos[] = $vehiculo;

    }

    public function  mostrarVehiculo()
    {
        echo "Placa" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp" . "Km" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp" . "Marca" . "<br/><br/>";
        foreach ($this->vehiculos as $vehiculos1) {

            echo $vehiculos1->getPlaca() . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp" . $vehiculos1->getKmActual() . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp" . $vehiculos1->getMarca() . "<br/>";

        }
    }

    public function mostrarVehiculoPorKm()
    {
        echo "Placa" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp" . "Km" . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp" . "Marca" . "<br/><br/>";
        foreach ($this->vehiculos as $vehiculos1) {
            if ($vehiculos1->getKmActual()>20 && $vehiculos1->getKmActual()<100) {
                echo $vehiculos1->getPlaca() . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp" . $vehiculos1->getKmActual() . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp" . $vehiculos1->getMarca() . "<br/>";
            }
        }
    }
}

?>