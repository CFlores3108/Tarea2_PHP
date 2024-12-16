<?php

require_once 'Personaje.php';
require_once 'Esqueleto.php';
require_once 'Zombi.php';
require_once 'PersonajeFactory.php';

// Seleccionar nivel
$nivel = 'facil';
//$nivel = 'dificil';

$personaje = PersonajeFactory::crearPersonaje($nivel);
echo $personaje->atacar() . PHP_EOL;
echo "Velocidad: " . $personaje->obtenerVelocidad() . PHP_EOL;

?>