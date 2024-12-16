<?php

class Esqueleto implements Personaje {
    private $velocidad;

    public function __construct() {
        $this->velocidad = 5;
    }

    public function atacar() {
        return "El Esqueleto ataca con su espada oxidada.";
    }

    public function obtenerVelocidad() {
        return $this->velocidad;
    }
}

?>