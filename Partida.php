<?php

require 'Sesion.php';

class Partida {
    // <!--Partida class -> con sesiones de juego propiedades dia y hora inicio y final-->
    // <!--Obtener de 1 partida la cantidad de sesiones que ha habida y la fecha de la ultima sesion-->

    private array $sesiones = [];
    private array $jugadores = [];
    // Crear Sesion
    public function addSesion(Sesion $sesion) {
        $this->validateSesion($sesion);
        // Anadir Sesion a array
        array_push($this->sesiones, $sesion);
    }
    public function addJugador(string $nombrePersona, Personaje $personaje) {
        $this->jugadores[$nombrePersona] = $personaje;
    }
    public function validateSesion(Sesion $sesion) {
        if ($sesion == null) {
            throw new Exception("La sesion no es valida");
        }
        // TODO Validar getters
    }
    public function getLastSesion() {
        $fechaPrevia = 0;
        for ($i = 0; $i < count($this->sesiones); $i++) {
            // Get sesion[i]
            $sesion = $this->sesiones[$i];
            $this->validateSesion($sesion);
            $fecha = $sesion->getFecha(); // Devuelve el tiempo desde Epoch
            // Compare sesion[i] to the most recent sesion stored
            if ($fecha > $fechaPrevia) {
                $recentSesion = $sesion;
            }
        }
        return $recentSesion;
    }
    public function getSesiones() {
        return count($this->sesiones);
    }
    public function getJugadores() {
        return $this->jugadores;
    }
}
$partida = new Partida();
$partida->addSesion(new Sesion(9,12,18,21));
$partida->addSesion(new Sesion(11,12,22,23));
$ultimaSesion = $partida->getLastSesion();
var_dump($ultimaSesion);
echo $partida->getSesiones();
?>
