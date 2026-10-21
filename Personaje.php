<?php
// 3 Personajes -> min 5 atributos, clase,
// <!-- Tirar 1 dado-->

//
enum Clase {
    case PICARO;
    case MAGO;
    case GUERRERO;
    case PALADIN;
}
    class Personaje {
        // Clase Enum
        private Clase $clase;
        // Raza String
        private string $raza;
        // Lista Atributos clave valor
        private array $atributos;

        private const CANTIDAD_ATRIBUTOS = 5;
        private function validarInput(mixed $aValidar) {
            if ($aValidar == null) {
                throw new Exception("Input not valid");
            }
        }
        private function validarArray(array $arr) {
            if (array_is_list($arr)) {
                throw new Exception("El array no es asociativo");
            }
            if ($arr == null) {
                throw new Exception("El array no es valido");
            }
        }
        public function __construct(Clase $clase, string $raza, array $atributos)
        {
            // VALIDACIONES
            $this->validarInput($clase);
            $this->validarInput($raza);
            $this->validarArray($atributos);
            if ( self::CANTIDAD_ATRIBUTOS > count($atributos)) {
                throw new Exception("Not enough Attributes");
            }
            // ASIGNACIONES
            $this->clase = $clase;
            $this->raza = $raza;
            $this->atributos = $atributos;
        }
        public function tirarDado() {
            return rand(1, 20);
        }

    }

$personaje1 = new Personaje(Clase::GUERRERO, "Duende Orco", ["ataque" => 15, "inteligencia"=> 5, "sabidura" => 13, "agilidad"=> 19, "fuerza" => 10 ]);
var_dump($personaje1);
?>
