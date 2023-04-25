<?php

namespace Src\Domain\VoProducto;

class Id
{
    private $id;
    
    public static function create($id)
    {
        return new self($id);
    }
    
    public function __construct($id)
    {
        $this->set($id);
    }
    
    private function set($id)
    {
        $this->assertIsInteger($id);
        $this->assertIsPositivo($id);    
        $this->id = $id;
    }
    
    private function assertIsInteger($id)
    {
        if ( $id && gettype($id) !== 'integer' ) {
            throw new Exception("El id de debe ser un entero", 400);
        } 
    }
    
    private function assertIsPositivo($id)
    {
        if ($id && $id <= 0) {    
            throw new \Exception("El id debe ser mayor a cero", 400);
        }
    }
    
    public function get()
    {
        return $this->id;
    }
}

