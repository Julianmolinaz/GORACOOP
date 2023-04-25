<?php

namespace Src\Contracs;

use Src\Domain\SolicitudEntity;

interface ISolicitudRepository
{
    public function save(SolicitudEntity $solicitudEntity);
}