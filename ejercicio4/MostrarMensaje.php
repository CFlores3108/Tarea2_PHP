<?php
// El contexto que usa las estrategias para mostrar el mensaje
class MostrarMensaje {
    private $estrategia;  // Referencia a la estrategia actual

    public function __construct(MensajeEstrategia $estrategia) {
        $this->estrategia = $estrategia;
    }

    // Método para cambiar la estrategia
    public function cambiarEstrategia(MensajeEstrategia $estrategia) {
        $this->estrategia = $estrategia;
    }

    // Método para mostrar el mensaje usando la estrategia actual
    public function mostrar($mensaje) {
        $this->estrategia->mostrarMensaje($mensaje);  // Delegar la tarea a la estrategia
    }
}
?>