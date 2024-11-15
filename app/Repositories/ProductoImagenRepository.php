<?php

namespace App\Repositories;

use App\Models\ProductoImagen;

class ProductoImagenRepository
{
    protected $productoImagen;

    public function __construct(ProductoImagen $productoImagen)
    {
        $this->productoImagen = $productoImagen;
    }

    public function obtenerProductosImagenes()
    {
        return $this->productoImagen->get();
    }

    public function obtenerProductosPorMarca($slug)
    {
        return $this->productoImagen
        ->join('marcas', 'marcas.id', '=', 'productos.marca_id')
        ->where('marcas.slug', $slug)->get();
    }

    public function obtenerProductoPorId($id)
    {
        return $this->productoImagen->find($id);
    }

}
