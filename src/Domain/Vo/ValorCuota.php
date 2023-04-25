<?php

namespace Src\Domain\Vo;


class ValorCuota
{
    private $valorCuota;

    private function __construct($valorCuota)
    {
        $this->set($valorCuota);
    }

    static function create($valorCuota)
    {
        return new self($valorCuota);
    }

    private function set($valorCuota)
    {
        if ($valorCuota < 0 || gettype($valorCuota) !== 'integer') {
            throw new \Exception("Se requiere un valor numérico positivo", 400);
        }

        if ($valorCuota == '') {
            throw new Exception("El valor de la cuota es requerido", 400);
            
        }

        $this->valorCuota = intval($valorCuota);
    }

    private function assertIsInteger($valorCuota)
    {
        if ( gettype($valorCuota) !== 'integer' ) {
            throw new Exception("El campo valor cuota debe ser un número", 400);
        } 
    }

    private function assertIsPositivo($valorCuota)
    {
        if ($valorCuota < 0) {    
            throw new \Exception("El valor cuota debe ser un número positivo", 400);
        }
    }

    private function assertIsRequired($valorCuota)
    {
        if ($valorCuota == '') {
            throw new Exception("El campo valor cuota es requerida", 400);
        }
    }

    public function get()
    {
        return $this->valorCuota;
    }
}