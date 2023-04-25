<?php

namespace Src\Domain\VoProducto;

class Nombre
{
    private $nombre;
    
    public static function create($nombre)
    {
        return new self($nombre);
    }
    
    public function __construct($nombre)
    {
        $this->set($nombre);
    }
    
    private function set($nombre)
    {
        $this->assertIsString($nombre);
        $this->assertIsRequired($nombre);   

        $this->nombre = $nombre;
    }
    
    private function assertIsString($nombre)
    {
        if ( $nombre && gettype($nombre) !== 'string' ) {
            throw new Exception("El nombre de debe ser un entero", 400);
        } 
    }
    
    private function assertIsRequired($nombre)
    {
        if ($nombre == '') {    
            throw new \Exception("El nombre es requerido", 400);
        }
    }
    
    public function get()
    {
        return $this->nombre;
    }
}

