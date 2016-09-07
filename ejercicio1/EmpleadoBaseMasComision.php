<?php


require_once 'Empleado.php';

class EmpleadoBaseMasComision extends Empleado implements PruebaEmpleado {


    private $salarioBase;
    private $comisionPorSalario;
    //arreglo de ventas
    private $ventas = array();

    function __construct($nombre, $apellido, $cedula, $comisionPorSalario, $ventas) {
        parent::__construct($nombre, $apellido, $cedula);
        $this->comisionPorSalario = $comisionPorSalario;
        $this->ventas = $ventas;

    }

    function getComisionPorSalario() {
        return $this->comisionPorSalario;
    }

    function getVentas() {
        return $this->ventas;
    }

    function setComisionPorSalario($comisionPorSalario) {
        $this->comisionPorSalario = $comisionPorSalario;
    }

    function setVentas($ventas) {
        $this->ventas = $ventas;
    }

    /**
     * @return mixed
     */
    public function getSalarioBase()
    {
        return $this->salarioBase;
    }

    /**
     * @param mixed $salarioBase
     */
    public function setSalarioBase($salarioBase)
    {
        $this->salarioBase = $salarioBase;
    }


    /*
     calculo de salario
     */


    public function cobrarSalario() {

        return $this->salarioBase + $this->ventas + $this->comisionPorSalario;
    }

}
