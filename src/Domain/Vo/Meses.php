<?php

namespace Src\Domain\Vo;


class Meses
{
    private $meses;

    private function __construct($meses)
    {
        $this->set($meses);
    }

    static function create($meses)
    {
        return new self($meses);
    }

    private function set($meses)
    {
        $this->assertIsInteger($meses);
        $this->assertIsPositivo($meses);
        $this->assertIsRequired($meses);

        $this->meses = intval($meses);
    }

    private function assertIsInteger($meses)
    {
        if ( gettype($meses) !== 'integer' ) {
            throw new Exception("El campo meses debe ser un entero", 400);
        } 
    }

    private function assertIsPositivo($meses)
    {
        if ($meses < 0) {    
            throw new \Exception("El campo meses debe ser Tipico, Domicilio o Sin meses", 400);
        }
    }

    private function assertIsRequired($meses)
    {
        if ($meses == '') {
            throw new Exception("El campo meses es requerida", 400);
        }
    }

    public function get()
    {
        return $this->meses;
    }
}