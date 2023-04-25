<?php

namespace Src\Domain\VoProducto;

class MinimoVehiculos
{
    private $minimoVehiculos;
    
    public static function create($minimoVehiculos)
    {
        return new self($minimoVehiculos);
    }
    
    public function __construct($minimoVehiculos)
    {
        $this->set($minimoVehiculos);
    }
    
    private function set($minimoVehiculos)
    {
        $this->assertIsInteger($minimoVehiculos);
        $this->assertIsPositivo($minimoVehiculos); 
        $this->assertIsRequired($minimoVehiculos);   
        $this->minimoVehiculos = $minimoVehiculos;
    }
    
    private function assertIsInteger($minimoVehiculos)
    {
        if ( $minimoVehiculos && gettype($minimoVehiculos) !== 'integer' ) {
            throw new Exception("El minimo de vehiculos de debe ser un entero", 400);
        } 
    }
    
    private function assertIsPositivo($minimoVehiculos)
    {
        if ($minimoVehiculos && $minimoVehiculos <= 0) {    
            throw new \Exception("El minimo de vehiculos debe ser mayor a cero", 400);
        }
    }

    private function assertIsRequired($minimoVehiculos)
    {
        if ($minimoVehiculos == '') {    
            throw new \Exception("El minimo de vehiculos es requerido", 400);
        }
    }
    
    public function get()
    {
        return $this->minimoVehiculos;
    }
}

