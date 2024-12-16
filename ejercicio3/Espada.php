<?php

// Decorador para añadir una espada al personaje
class Espada extends ArmaDecorator {
    public function atacar() {
        return $this->personaje->atacar() . " ¡Con una espada afilada!";
    }

    public function obtenerDescripcion() {
        return $this->personaje->obtenerDescripcion() . " Tiene una espada afilada.";
    }
}

?>
