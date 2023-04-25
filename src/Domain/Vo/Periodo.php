<?php

namespace Src\Domain\Vo;


class Periodo
{
    private $periodo;

    public static function create($periodo)
    {
        return new self($periodo);
    }

    private function __construct($periodo)
    {
        $this->set($periodo);
    }

    private function set($periodo)
    {
        $this->assertIsString($periodo);
        $this->assertIsEnum($periodo);
        $this->assertIsRequired($periodo);

        $this->periodo = $periodo;
    }

    private function assertIsString($periodo)
    {
        if ( gettype($periodo) !== 'string' ) {
            throw new Exception("El campo periodo debe ser un entero", 400);
        } 
    }

    private function assertIsEnum($periodo)
    {
        if ($periodo !== "Quincenal" && $periodo !== "Mensual") {    
            throw new \Exception("El periodo debe ser Quincenal o Mensual", 400);
        }
    }

    private function assertIsRequired($periodo)
    {
        if ($periodo == '') {
            throw new Exception("El campo periodo es requerida", 400);
        }
    }

    public function get()
    {
        return $this->periodo;
    }
}