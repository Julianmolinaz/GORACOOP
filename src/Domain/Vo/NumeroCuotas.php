<?php

namespace Src\Domain\Vo;

class NumeroCuotas
{
    private $numeroCuotas;

    public static function create($numeroCuotas)
    {
        return new self($numeroCuotas);
    }

    private function __construct($numeroCuotas)
    {
        $this->set($numeroCuotas);
    }

    private function set($numeroCuotas)
    {
        $this->assertIsInteger($numeroCuotas);
        $this->assertIsPositivo($numeroCuotas);
        $this->assertIsRequired($numeroCuotas);

        $this->numeroCuotas = intval($numeroCuotas);
    }

    private function assertIsInteger($numeroCuotas)
    {
        if ( gettype($numeroCuotas) !== 'integer' ) {
            throw new Exception("El numero de Cuotas debe ser unentero", 400);
        } 
    }

    private function assertIsPositivo($numeroCuotas)
    {
        if ($numeroCuotas < 0) {    
            throw new \Exception("El numero de Cuotas debe ser mayor a cero", 400);
        }
    }

    private function assertIsRequired($numeroCuotas)
    {
        if ($numeroCuotas == '') {
            throw new Exception("El numero de Cuotas es requerida", 400);
        }
    }

    public function get()
    {
        return $this->numeroCuotas;
    }
}