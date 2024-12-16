<?php
// Implementación de la estrategia de salida en archivo TXT
class TxtEstrategia implements MensajeEstrategia {
    public function mostrarMensaje($mensaje) {
        file_put_contents("mensaje.txt", $mensaje . PHP_EOL, FILE_APPEND);
        echo "Mensaje guardado en archivo TXT." . PHP_EOL;
    }
}
?>