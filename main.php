<?php
require_once('Partida.php');
require_once('Personaje.php');
require_once('Sesion.php');
// Crear recursos
$sesion1 = new Sesion(5,4,10,12);
$sesion2 = new Sesion(11,12,22,23);
$personaje1 = new Personaje(Clase::GUERRERO, "Duende Orco", ["ataque" => 15, "inteligencia"=> 5, "sabiduria" => 13, "agilidad"=> 19, "fuerza" => 10 ]);
$personaje2 = new Personaje(Clase::MAGO, "Alto Elfo", ["ataque" => 9, "inteligencia"=> 16, "sabiduria" => 15, "agilidad"=> 11, "fuerza" => 6]);
$partida = new Partida();
$partida->addSesion($sesion1);
$partida->addSesion($sesion2);

$partida->addJugador("Juan", $personaje1);
$partida->addJugador("Luisa", $personaje2);
$ultimaSesion = $partida->getLastSesion();
// Mostrar datos partida
var_dump($partida->getJugadores());
var_dump($ultimaSesion);
echo $partida->getSesiones();
// Mostrar datos sesion
echo $sesion1->getFecha();
echo date('d/m/y',$sesion1->getFecha()); // Aqui formateo el tiempo epoch con date
// Mostrar datos personajes
var_dump($personaje1);
var_dump($personaje2);
?>
