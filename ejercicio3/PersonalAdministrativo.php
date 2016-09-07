<?php

require_once 'Empleado.php';

class PersonalAdministrativo  extends Empleado
{
     private $email;

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


}