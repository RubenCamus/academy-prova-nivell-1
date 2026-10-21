<?php

class Sesion {
    private int $mes;
    private int $dia;
    private int $hora_inicio;
    private int $hora_final;
    private string $fecha;
    private function validarInput(mixed $aValidar) {
                if ($aValidar == null) {
                    throw new Exception("Input not valid");
                }
            }
    public function __construct(int $mes, int $dia, int $hora_inicio, int $hora_final)
    {
        $this->validarInput($dia);
        $this->validarInput($mes);
        $this->validarInput($hora_inicio);
        $this->validarInput($hora_final);
        $this->mes = $mes;
        $this->dia = $dia;
        $this->hora_inicio = $hora_inicio;
        $this->hora_final = $hora_final;
        $this->fecha = mktime($this->hora_inicio, 0,0,$this->mes,$this->dia);
    }
    public function getDia(): int {
        return $this->dia;
    }
    public function getMes(): int {
        return $this->mes;
    }
    public function getFecha(): string {
        return $this->fecha;
    }
    public function getHoraInicio():int {
        return $this->hora_inicio;
    }
    public function getHoraFinal():int {
        return $this->hora_final;
    }

}
$sesion1 = new Sesion(5,4,10,12);
echo $sesion1->getFecha();
echo date('d/m/y',$sesion1->getFecha()); // Aqui formateo el tiempo epoch con date

?>
