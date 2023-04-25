<?php

namespace Src\Domain\Vo;


class Estudio
{
    private $estudio;

    public static function create($estudio)
    {
        return new self($estudio);
    }

    private function __construct($estudio)
    {
        $this->set($estudio);
    }

    private function set($estudio)
    {
        $this->assertIsstring($estudio);
        $this->assertIsEnum($estudio);
        $this->assertIsRequired($estudio);

        $this->estudio = $estudio;
    }

    private function assertIsString($estudio)
    {
        if ( gettype($estudio) !== 'string' ) {
            throw new Exception("El estudio debe ser un entero", 400);
        } 
    }

    private function assertIsEnum($estudio)
    {
        if ($estudio !== "Tipico" && $estudio !== "Domicilio" && $estudio !== "Sin estudio") {    
            throw new \Exception("El estudio debe ser Tipico, Domicilio o Sin estudio", 400);
        }
    }

    private function assertIsRequired($estudio)
    {
        if ($estudio == '') {
            throw new Exception("El estudio es requerida", 400);
        }
    }

    public function get()
    {
        return $this->estudio;
    }
}