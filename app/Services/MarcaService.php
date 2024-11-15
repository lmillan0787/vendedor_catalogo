<?php

namespace App\Services;

use App\Repositories\MarcaRepository;

class MarcaService
{
    public $marcaRepository;

    public function __construct(MarcaRepository $marcaRepository)
    {
        $this->marcaRepository = $marcaRepository;
    }

    public function obtenerMarcas()
    {
        return $this->marcaRepository->obtenerMarcas();
    }
}
