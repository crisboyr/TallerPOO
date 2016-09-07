<?php
require_once 'Empleado.php';

class Instructor   extends Empleado
{
    private $email;
    private $nombrePrograma;

    public function __construct($nombres, $apellidos, $dni, $estadoCivil,$anioIncorporacion,$email) {

        parent::__construct($nombres, $apellidos, $dni, $estadoCivil,$anioIncorporacion);
        $this->email=$email;

    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getNombrePrograma()
    {
        return $this->nombrePrograma;
    }

    /**
     * @param mixed $nombrePrograma
     */
    public function setNombrePrograma($nombrePrograma)
    {
        $this->nombrePrograma = $nombrePrograma;
    }



}
?>