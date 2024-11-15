<?php

namespace App\Services;

use App\Models\ProductoImagen;
use App\Repositories\MarcaRepository;
use App\Repositories\ProductoRepository;
use App\Repositories\ProductoImagenRepository;

class ProductoService
{
    public $productoRepository;
    public $marcaRepository;
    public $productoImagenRepository;

    public function __construct(
    ProductoRepository $productoRepository,
    MarcaRepository $marcaRepository,
    ProductoImagenRepository $productoImagenRepository
    )
    {
        $this->productoRepository = $productoRepository;
        $this->marcaRepository = $marcaRepository;
        $this->productoImagenRepository = $productoImagenRepository;
    }

    public function obtenerProductos()
    {
        return $this->productoImagenRepository->obtenerProductosImagenes();
    }

    public function obtenerProductosPorMarca($slug)
    {
        return $this->productoRepository->obtenerProductosPorMarca($slug);
    }

    public function obtenerProductoPorId($id)
    {
        return $this->productoRepository->obtenerProductoPorId($id);
    }

    public function obtenerMarcas()
    {
        return $this->marcaRepository->obtenerMarcas();
    }

    public function obtenerProductoPorImagen($id)
    {
        return $this->productoRepository->obtenerProductoPorImagen($id);
    }

}
