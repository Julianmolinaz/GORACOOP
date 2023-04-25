<?php

namespace Src\Domain\Vo;

class SegundaFecha
{
    private $segundaFecha;

    public static function create($segundaFecha)
    {
        return new self($segundaFecha);
    }

    private function __construct($segundaFecha)
    {
        $this->set($segundaFecha);
    }

    private function set($segundaFecha)
    {
        $this->assertIsInteger($segundaFecha);
        $this->assertRange($segundaFecha);

        $this->segundaFecha = $segundaFecha;
    }

    private function assertIsInteger($segundaFecha)                                                                                                         
    {                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
        if (gettype($segundaFecha) !== 'integer') {
            throw new Exception("La segunda fecha debe ser un entero positivo", 400);
            
        }                                                                                                                                                                                                                     
    }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      

    private function assertRange($segundaFecha)
    {
        if ($segundaFecha < 0 && $segundaFecha > 31) {
            throw new Exception("La segunda fecha debe estar entre 1 y 31 días", 400);
            
        }
    }

    public function get()
    {
        return $this->segundaFecha;
    }

}