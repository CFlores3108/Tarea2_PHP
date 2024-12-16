<?php

// Incluir las clases necesarias
require_once 'Personaje.php';
require_once 'Guerrero.php';
require_once 'Arquero.php';
require_once 'ArmaDecorator.php';
require_once 'Espada.php';
require_once 'Arco.php';

// Crear personajes
$guerrero = new Guerrero();
$arquero = new Arquero();

// Decorar personajes con armas
$guerreroConEspada = new Espada($guerrero);
$arqueroConArco = new Arco($arquero);

// Mostrar resultados
echo $guerreroConEspada->atacar() . PHP_EOL;
echo $guerreroConEspada->obtenerDescripcion() . PHP_EOL;

echo $arqueroConArco->atacar() . PHP_EOL;
echo $arqueroConArco->obtenerDescripcion() . PHP_EOL;

?>
