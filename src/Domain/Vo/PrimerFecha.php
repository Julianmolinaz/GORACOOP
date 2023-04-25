<?php

namespace Src\Domain\Vo;

class PrimerFecha
{
    private $primerFecha;

    public static function create($primerFecha)
    {
        return new self($primerFecha);
    }

    private function __construct($primerFecha)
    {
        $this->set($primerFecha);
    }

    private function set($primerFecha)
    {
        $this->assertIsInteger($primerFecha);
        $this->assertRange($primerFecha);
        $this->assertRequired($primerFecha);

        $this->primerFecha = $primerFecha;
    }

    private function assertIsInteger($primerFecha)
    {
        if (gettype($primerFecha) !== 'integer') {
            throw new Exception("La primer fecha debe ser un entero positivo", 400);        
        }
    }

    private function assertRange($primerFecha)
    {
        if ($primerFecha < 0 && $primerFecha >= 31) {
            throw new Exception("La segunda fecha es requerida y debe estar entre 1 y 31 días", 400);   
        }
    }

    private function assertRequired($primerFecha)
    {
        if ($primerFecha == '') {
            throw new Exception("La primer fecha es requerida", 400);
        }
    }

    public function get()
    {
        return $this->primerFecha;
    }

}