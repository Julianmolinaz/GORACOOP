<?php

namespace Src\Domain\Entities;

use Src\Domain\Vo;

class SolicitudEntity
{
    private $id;
    private $aprobado;
    private $centroCostos;
    private $consecutivo;
    private $estudio;
    private $fechaSolicitud;
    private $meses;
    private $numeroCuotas;
    private $observaciones;
    private $periodo;
    private $primerFecha;
    private $segundaFecha;
    private $valorCuota;
    private $clienteId;
    private $productoId;
    private $carteraId;
    private $funcionarioId;
    
    
    public function __construct(

        // Primary Key
        Vo\Id               $id,

        // Attributes               
        Vo\Aprobado         $aprobado,
        Vo\CentroCostos     $centroCostos,
        Vo\Consecutivo      $consecutivo,
        Vo\Estudio          $estudio,
        Vo\FechaSolicitud   $fechaSolicitud,
        Vo\Meses            $meses,
        Vo\NumeroCuotas     $numeroCuotas,
        Vo\Observaciones    $observaciones,
        Vo\Periodo          $periodo,
        Vo\PrimerFecha      $primerFecha,
        Vo\SegundaFecha     $segundaFecha,
        Vo\ValorCuota       $valorCuota,

        // Foreign Key
        Vo\Id               $clienteId, 
        Vo\Id               $productoId, 
        Vo\Id               $carteraId,
        Vo\Id               $funcionarioId
    ) {

        $this->id               = $id;
        $this->aprobado         = $aprobado;
        $this->centroCostos     = $centroCostos;
        $this->consecutivo      = $consecutivo;
        $this->estudio          = $estudio;
        $this->fechaSolicitud   = $fechaSolicitud;
        $this->meses            = $meses;
        $this->numeroCuotas     = $numeroCuotas;
        $this->observaciones    = $observaciones;
        $this->periodo          = $periodo;
        $this->primerFecha      = $primerFecha;
        $this->segundaFecha     = $segundaFecha;
        $this->valorCuota       = $valorCuota;
        $this->clienteId        = $clienteId;
        $this->productoId       = $productoId;
        $this->carteraId        = $carteraId;
        $this->funcionarioId    = $funcionarioId;
    }

    public function toArray()
    {
        return [
            'id'                => $this->id->get(),
            'aprobado'          => $this->aprobado->get(),
            'vlr_fin'           => $this->centroCostos->get(),
            'num_fact'          => $this->consecutivo->get(),
            'estudio'           => $this->estudio->get(),
            'fecha'             => $this->fechaSolicitud->get(),
            'meses'             => $this->meses->get(),
            'cuotas'            => $this->numeroCuotas->get(),
            'observaciones'     => $this->observaciones->get(),
            'periodo'           => $this->periodo->get(),
            'p_fecha'           => $this->primerFecha->get(),
            's_fecha'           => $this->segundaFecha->get(),
            'vlr_cuota'         => $this->valorCuota->get(),       
            'cliente_id'        => $this->clienteId->get(),
            'producto_id'       => $this->productoId->get(),
            'cartera_id'        => $this->carteraId->get(),
            'funcionario_id'    => $this->funcionarioId->get()
        ];
    }

}