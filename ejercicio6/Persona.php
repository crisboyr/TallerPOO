<?php


class Persona
{
    private $numeroDocumento;
    private $nombre;
    private $telefono;
    private $personas = array();

    /**
     * Persona constructor.
     * @param $numeroDocumento
     * @param $nombre
     * @param $telefono
     */
    public function __construct($numeroDocumento, $nombre, $telefono)
    {
        $this->numeroDocumento = $numeroDocumento;
        $this->nombre = $nombre;
        $this->telefono = $telefono;
    }

    /**
     * Persona constructor.
     * @param $numeroDocumento
     * @param $nombre
     * @param $telefono
     */


    /**
     * @return mixed
     */


    public function getNumeroDocumento()
    {
        return $this->numeroDocumento;
    }

    /**
     * @param mixed $numeroDocumento
     */
    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numeroDocumento = $numeroDocumento;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * @return array
     */
    public function getPersonas()
    {
        return $this->personas;
    }

    /**
     * @param array $personas
     */
    public function setPersonas($personas)
    {
        $this->personas = $personas;
    }



    public function registrarPersona(Persona $persona)
    {
        $this->personas[] = $persona;

    }

}

?>