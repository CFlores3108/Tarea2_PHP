<?php
// Implementación de la estrategia de salida en consola
class ConsolaEstrategia implements MensajeEstrategia {
    public function mostrarMensaje($mensaje) {
        echo "Mensaje en consola: " . $mensaje . PHP_EOL;
    }
}
?>