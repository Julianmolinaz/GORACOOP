<?php

namespace Src\Domain\Vo;


class CentroCostos
{
    private $centroCostos;

    private function __construct($centroCostos)
    {
        $this->set($centroCostos);
    }

    static function create($centroCostos)
    {
        return new self($centroCostos);
    }

    private function set($centroCostos)
    {
        $this->assertIsInteger($centroCostos);
        $this->assertIsPositivo($centroCostos);
        $this->assertIsRequired($centroCostos);

        $this->centroCostos = intval($centroCostos);
    }

    private function assertIsInteger($centroCostos)
    {
        if ( gettype($centroCostos) !== 'integer' ) {
            throw new Exception("El Costo del crédito debe ser unentero", 400);
        } 
    }

    private function assertIsPositivo($centroCostos)
    {
        if ($centroCostos < 0) {    
            throw new \Exception("El Costo del crédito debe ser mayor a cero", 400);
        }
    }

    private function assertIsRequired($aprobado)
    {
        if ($aprobado == '') {    
            throw new \Exception("El centro de ccostos es requerido", 400);
        }
    }

    public function get()
    {
        return $this->centroCostos;
    }
}