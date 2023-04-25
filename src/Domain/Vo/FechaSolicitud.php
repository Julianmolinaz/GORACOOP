<?php

namespace Src\Domain\Vo;

class FechaSolicitud
{
    private $day;
    private $year;
    private $fechaSolicitud;
    private $month;

    private function __construct($fechaSolicitud)
    {
        $this->set($fechaSolicitud);
    }

    static function create($fechaSolicitud)
    {
        return new self($fechaSolicitud);
    }

    private function set($fechaSolicitud)
    {
        $this->assertIsString($fechaSolicitud);
        $this->assertIsDate($fechaSolicitud);
        $this->assertIsRequired($fechaSolicitud);

        $this->fechaSolicitud = $fechaSolicitud;

        $this->getDay();
        $this->getYear();
        $this->getMonth();
    }

    private function assertIsString($fechaSolicitud)
    {
        if ( gettype($fechaSolicitud) !== 'string' ) {
            throw new Exception("La fecha de solicitud debe ser una cadena de texto", 400);
        } 
    }

    private function assertIsDate($fechaSolicitud)
    {
        if (substr($fechaSolicitud, 2, 1) == '-' ) {    
            throw new \Exception("El formato de la fecha de solicitud debe ser aaaa-mm-dd", 400);
        }
    }

    private function assertIsRequired($fechaSolicitud)
    {
        if ($fechaSolicitud == '') {
            throw new Exception("La fecha de solicitud es requerida", 400);
        }
    }

    private function getYear() 
    {
        $this->year = substr($this->fechaSolicitud, 0, 4);

        if ($this->year < 1900 || $this->year > 2100) {
            throw new \Exception("El año no es valido", 400);
        }

        return $this->year;
    }

    private function getMonth()
    {
        $this->mounth = substr($this->fechaSolicitud, 5, 2);

        if ($this->mounth < 1 || $this->mounth > 12) {
            throw new \Exception("El mes no es valido", 400);
        }

        return $this->mounth;
    }

    private function getDay()
    {
        $this->day = substr($this->fechaSolicitud, 8, 2);

        if ($this->day < 1 || $this->day > 31) {
            throw new \Exception("El día no es valido", 400);
        }

        return $this->day;
    }

    public function get()
    {
        return $this->fechaSolicitud;
    }
}