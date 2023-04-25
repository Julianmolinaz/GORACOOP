<?php

namespace Src\Infrasctructure;

use Src\Contracts\ISolicitudRepository;
use Src\Domain\Entities\SolicitudEntity;
use App\Precredito;

class EloquentSolicitudRepository implements ISolicitudRepository
{
    public function save(SolicitudEntity $solicitudEntity)
    {
        $newSolicitud = new Precredito($solicitudEntity);
        $newSolicitud->user_create_id = 1;
        $newSolicitud->save();

        return $newSolicitud;
    }
}