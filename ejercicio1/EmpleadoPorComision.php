<?php

require_once 'Empleado.php';

class EmpleadoPorComision extends Empleado implements PruebaEmpleado {


    private $salario;
    private $comisionPorSalario;
    //arreglo de ventas
    private $ventas = array();

    /**
     * EmpleadoPorComision constructor.
     * @param $comisionPorSalario
     * @param array $ventas
     */
    function __construct($salarioBase, $comisionPorSalario, $ventas,$nombre, $apellido, $cedula) {
        parent::__construct($nombre, $apellido, $cedula);
        $this->comisionPorSalario = $comisionPorSalario;
        $this->ventas = $ventas;
    }




    function getVentas() {
        return $this->ventas;
    }


    function setVentas($ventas) {
        $this->ventas = $ventas;
    }

    function getComisionPorSalario() {
        return $this->comisionPorSalario;
    }

    function setComisionPorSalario($comisionPorSalario) {
        $this->comisionPorSalario = $comisionPorSalario;
    }

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * @param mixed $salario
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }


    /*
    EmpleadoPorComision que tenga un salario base de 0, pero tenga un número de
    ventas y una comisión por ventas, y su salario sea su multiplicación.
     */
    public function cobrarSalario() {
        return $this->salario = $this->ventas * $this->comisionPorSalario;
    }

}
