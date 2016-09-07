<?php


class Comision
{
    const PORCENTAJE=0.09;
    private $totalComision;

    /**
     * @return mixed
     */
    public function getTotalComision()
    {
        return $this->totalComision;
    }

    /**
     * @param mixed $totalComision
     */
    public function setTotalComision($totalComision)
    {
        $this->totalComision = $totalComision;
    }


    public function calcularComision($totalVenta){
       $this->totalComision=$totalVenta*Comision::PORCENTAJE."<br/>";
    }
}