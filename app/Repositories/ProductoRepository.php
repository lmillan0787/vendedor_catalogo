<?php

namespace App\Repositories;

use App\Models\Producto;

class ProductoRepository
{
    protected $producto;

    public function __construct(Producto $producto)
    {
        $this->producto = $producto;
    }

    public function obtenerProductos()
    {
        return $this->producto
            ->select('descripcion_producto', 'imagen_id')
            ->whereNotNull('imagen_id')
            ->groupBy('imagen_id', 'descripcion_producto')
            ->get();
    }

    public function obtenerProductosPorMarca($slug)
    {
        return $this->producto
            ->select(
                'productos.id',
                'descripcion_producto',
                'imagen_id',
                'producto_imagenes.imagen',
                'nombre_marca',
                'precio',
                'iva',
                'precio_con_iva',
                'unidades_por_caja'
            )
            ->join('marcas', 'marcas.id', '=', 'productos.marca_id')
            ->leftJoin('producto_imagenes', 'producto_imagenes.id', '=', 'productos.imagen_id')
            ->where('marcas.slug', $slug)->get();
    }

    public function obtenerProductoPorId($id)
    {
        return $this->producto->find($id);
    }

    public function obtenerProductoPorImagen($id)
    {
        return $this->producto
            ->select(
                'productos.id',
                'productos.codigo_producto',
                'precio',
                'iva',
                'precio_con_iva',
                'nombre_marca',
                'producto_imagenes.imagen',
                'descripcion_producto',
                'nombre_marca',
                'productos.imagen_id',
                'unidades_por_caja'
            )
            ->join('marcas', 'marcas.id', '=', 'productos.marca_id')
            ->join('producto_imagenes', 'producto_imagenes.id', '=', 'productos.imagen_id')
            ->where('productos.imagen_id', $id)
            ->get();
    }
}
