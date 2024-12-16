<?php
// Implementación de la estrategia de salida en formato JSON
class JsonEstrategia implements MensajeEstrategia {
    public function mostrarMensaje($mensaje) {
        echo json_encode(["mensaje" => $mensaje]) . PHP_EOL;
    }
}
?>