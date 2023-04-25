<?php

namespace Src\Domain\Vo;

class Consecutivo
{

    public static function create($consecutivo)
    {
        return new self($consecutivo);
    }

    private function __construct($consecutivo)
    {
        $this->set($consecutivo);
    }

    private function set($consecutivo)
    {
        $this->assertIsString($consecutivo);
        $this->assertIsRequired($consecutivo);

        $this->consecutivo = $consecutivo;
    }

    private function assertIsString($consecutivo)
    {
        if ( gettype($consecutivo) !== 'string' ) {
            throw new Exception("El consecutivo debe ser una cadena de texto", 400);
        } 
    }

    private function assertIsRequired($aprobado)
    {
        if ($aprobado == '') {    
            throw new \Exception("El consecutivo es requerido", 400);
        }
    }


    public function get()
    {
        return $this->consecutivo;
    }

}