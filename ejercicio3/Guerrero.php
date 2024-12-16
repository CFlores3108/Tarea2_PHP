<?php

// Clase que representa un Guerrero
class Guerrero implements Personaje {
    public function atacar() {
        return "Guerrero ataca con su espada.";
    }

    public function obtenerDescripcion() {
        return "Guerrero intermedio, de complexión fuerte y musculosa, con cabello largo y oscuro atado en una coleta. Viste una armadura pesada de placas de hierro, con detalles en rojo y negro, y lleva un escudo redondo en su brazo izquierdo. Su espada larga es su principal arma, siempre lista para un combate cuerpo a cuerpo con gran destreza.";
    }
    
}

?>
