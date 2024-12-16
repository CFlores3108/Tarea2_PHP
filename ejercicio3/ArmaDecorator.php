<?php

// Clase abstracta que implementa la interfaz Personaje y sirve de base para los decoradores
abstract class ArmaDecorator implements Personaje {
    protected $personaje;

    public function __construct(Personaje $personaje) {
        $this->personaje = $personaje;
    }

    abstract public function atacar();
    abstract public function obtenerDescripcion();
}

?>
