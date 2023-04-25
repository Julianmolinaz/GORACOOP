<?php

namespace Src\Domain\VoProducto;

class Descripcion
{
    private $descripcion;
    
    public static function create($descripcion)
    {
        return new self($descripcion);
    }
    
    public function __construct($descripcion)
    {
        $this->set($descripcion);
    }
    
    private function set($descripcion)
    {
        $this->assertIsString($descripcion);
        $this->assertIsPositivo($descripcion);   

        $this->descripcion = $descripcion;
    }
    
    private function assertIsString($descripcion)
    {
        if ( $descripcion && gettype($descripcion) !== 'string' ) {
            throw new Exception("La descripcion de debe ser una cadena de texto", 400);
        } 
    }
    
    private function assertIsPositivo($descripcion)
    {
        if ($descripcion == '') {    
            throw new \Exception("La descripcion es requerido", 400);
        }
    }
    
    public function get()
    {
        return $this->descripcion;
    }
}

