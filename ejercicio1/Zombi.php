<?php

class Zombi implements Personaje {
    private $velocidad;

    public function __construct() {
        $this->velocidad = 2;
    }

    public function atacar() {
        return "El Zombi muerde al enemigo.";
    }

    public function obtenerVelocidad() {
        return $this->velocidad;
    }
}

?>