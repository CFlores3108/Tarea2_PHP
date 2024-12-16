<?php
// Incluir todas las clases
require_once 'MensajeEstrategia.php';
require_once 'ConsolaEstrategia.php';
require_once 'JsonEstrategia.php';
require_once 'TxtEstrategia.php';
require_once 'MostrarMensaje.php';

// Crear el contexto con una estrategia inicial
$mensaje = new MostrarMensaje(new ConsolaEstrategia());
$mensaje->mostrar("Este es un mensaje de prueba.");  // Mostrar en consola

// Cambiar la estrategia a JSON
$mensaje->cambiarEstrategia(new JsonEstrategia());
$mensaje->mostrar("Este es un mensaje de prueba en JSON.");  // Mostrar en formato JSON

// Cambiar la estrategia a archivo TXT
$mensaje->cambiarEstrategia(new TxtEstrategia());
$mensaje->mostrar("Este es un mensaje de prueba en archivo TXT.");  // Guardar en archivo TXT
?>