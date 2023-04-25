<?php

namespace Src\Domain\Vo;

class Observaciones
{

    public static function create($observaciones)
    {
        return new self($observaciones);
    }

    private function __construct($observaciones)
    {
        $this->set($observaciones);
    }

    private function set($observaciones)
    {
        $this->assertIsString($observaciones);

        $this->observaciones = $observaciones;
    }

    private function assertIsString($observaciones)
    {
        if (gettype($observaciones) !== 'string') {
            throw new \Exception("El campo observaciones de ser una cadena de texto", 400);
        }
    }

    public function get()
    {
        return $this->observaciones;
    }

}