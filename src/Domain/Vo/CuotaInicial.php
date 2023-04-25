<?php

namespace Src\Domain\Vo;


class CuotaInicial
{
    private $cuotaInicial;

    static function create($cuotaInicial)
    {
        return new self($cuotaInicial);
    }

    private function __construct($cuotaInicial)
    {
        $this->set($cuotaInicial);
    }

    private function set($cuotaInicial)
    {
        $this->assertIsInteger($cuotaInicial);
        $this->assertIsPositivo($cuotaInicial);
        $this->assertIsRequired($cuotaInicial);

        $this->cuotaInicial = intval($cuotaInicial);
    }

    private function assertIsInteger($cuotaInicial)
    {
        if ( gettype($cuotaInicial) !== 'integer' ) {
            throw new Exception("La cuota inicial debe ser unentero", 400);
        } 
    }

    private function assertIsPositivo($cuotaInicial)
    {
        if ($cuotaInicial < 0) {    
            throw new \Exception("La cuota inicial debe ser mayor a cero", 400);
        }
    }

    private function assertIsRequired($cuotaInicial)
    {
        if ($cuotaInicial == '') {
            throw new Exception("La cuta inicial es requerida", 400);
        }
    }

    public function get()
    {
        return $this->cuotaInicial;
    }
}