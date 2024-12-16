<?php

// Decorador para añadir un arco al personaje
class Arco extends ArmaDecorator {
    public function atacar() {
        return $this->personaje->atacar() . " ¡Con un arco y flechas!";
    }

    public function obtenerDescripcion() {
        return $this->personaje->obtenerDescripcion() . " Tiene un arco y flechas.";
    }
}

?>
