<?php

require_once 'Persona.php';

class Aprendiz extends Persona {


    private $email;

    public function __construct($nombres, $apellidos, $dni, $estadoCivil,$email,$numeroFicha) {

        parent::__construct($nombres, $apellidos, $dni, $estadoCivil);
        $this->email = $email;
        $this->numeroFicha = $numeroFicha;
    }

    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }



}
?>