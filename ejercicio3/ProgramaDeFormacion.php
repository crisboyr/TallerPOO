<?php


class ProgramaDeFormacion
{
    public $codigoPrograma;
    public $nombrePrograma;

    function __construct($codigoPrograma, $nombrePrograma) {
        $this->codigoPrograma = $codigoPrograma;
        $this->nombrePrograma = $nombrePrograma;
    }

    function getCodigoPrograma() {
        return $this->codigoPrograma;
    }

    function getNombrePrograma() {
        return $this->nombrePrograma;
    }

    function setCodigoPrograma($codigoPrograma) {
        $this->codigoPrograma = $codigoPrograma;
    }

    function setNombrePrograma($nombrePrograma) {
        $this->nombrePrograma = $nombrePrograma;
    }
}

?>