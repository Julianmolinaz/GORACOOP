<?php

namespace Src\Application\UseCases;

use Src\Domain\Entitie\SolicitudEntity;
use Src\Domain\Vo;
use Src\Contracts\ISolicitudRepository;

class CreateSolicitudUseCase
{
    private $repository;

    public function __construct(ISolicitudRepository $repository) 
    {
        $this->repository = $repository;
    }

    public function execute($solicitudData) 
    {
        // crear entidad
        $solicitudEntity = new SolicitudEntity(
            Vo\Id::create(null),
            Vo\Aprobado($solicitudData->aprobado),
            Vo\CentroCostos($solicitudData->vlr_fin),
            Vo\Consecutivo($solicitudData->num_fact),
            Vo\Estudio($solicitudData->estudio),
            Vo\FechaSolicitud($solicitudData->fecha),
            Vo\Meses($solicitudData->meses),
            Vo\NumeroCuotas($solicitudData->cuota),
            Vo\Observaciones($solicitudData->observaciones),
            Vo\Periodo($solicitudData->periodo),
            Vo\PrimerFecha($solicitudData->p_fecha),
            Vo\SegundaFecha($solicitudData->s_fecha),
            Vo\ValorCuota($solicitudData->vlr_cuota),
            Vo\Id($solicitudData->clienteId),
            Vo\Id($solicitudData->productoId),
            Vo\Id($solicitudData->carteraId),
            Vo\Id($solicitudData->funcionarioId),
            Vo\Id($solicitudData->userCreateId),
            Vo\Id($solicitudData->userUpdateId)
        );

        // salvar la solicitud
        $this->repository->save($solicitudEntity);
    }
}
