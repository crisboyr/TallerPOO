<?php

require_once'Aprendiz.php';
class Ficha
{
    private $numeroFicha;
    private $aprendices=array();

    /**
     * @return mixed
     */
    public function getNumeroFicha()
    {
        return $this->numeroFicha;
    }

    public function add(Aprendiz $aprendiz) {
        $this->aprendices[] = $aprendiz;
    }

    /**
     * @param mixed $numeroFicha
     */
    public function setNumeroFicha($numeroFicha)
    {
        $this->numeroFicha = $numeroFicha;
    }

}