<?php

namespace App\Repositories;

use App\Models\Marca;

class MarcaRepository
{
    protected $marca;

    public function __construct(Marca $marca)
    {
        $this->marca = $marca;
    }

    public function obtenerMarcas()
    {
        return $this->marca->all();
    }

}
