<?php

namespace Src\Domain\Vo;


class Aprobado
{
    private $aprobado;

    static function create($aprobado)
    {
        return new self($aprobado);
    }

    private function __construct($aprobado)
    {
        $this->set($aprobado);
    }

    private function set($aprobado)
    {
        $this->assertIsString($aprobado);
        $this->assertIsEnum($aprobado);
        $this->assertIsRequired($aprobado);

        $this->aprobado = $aprobado;
    }

    private function assertIsString($aprobado)
    {
        if ( gettype($aprobado) !== 'string' ) {
            throw new Exception("El aprobado debe ser una cadena de texto", 400);
        } 
    }

    private function assertIsEnum($aprobado)
    {
        if ($aprobado !== "Si" && $aprobado !== "No" && $aprobado !== "En estudio" && $aprobado !== "Desistio") {    
            throw new \Exception("El aprobado debe ser Si, No, En estudio o Desistio", 400);
        }
    }

    private function assertIsRequired($aprobado)
    {
        if ($aprobado == '') {    
            throw new \Exception("El aprobado es requerido", 400);
        }
    }

    public function get()
    {
        return $this->aprobado;
    }
}