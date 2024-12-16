<?php

// Clase que representa un Arquero
class Arquero implements Personaje {
    public function atacar() {
        return "Arquero dispara una flecha.";
    }

    public function obtenerDescripcion() {
        return "Arquero intermedio, con cabello corto y oscuro, vistiendo una capa verde camuflada y un chaleco de cuero reforzado. Utiliza flechas de punta afilada, hechas a mano, con plumas rojas para mayor precisión. Es hábil con el arco y siempre se mantiene atento a su entorno.";
    }
    
}

?>
