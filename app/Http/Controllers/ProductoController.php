<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductoService;

class ProductoController extends Controller
{
    public $productoService;
    public function __construct(ProductoService $productoService)
    {
        $this->productoService = $productoService;
    }

    public function index()
    {
        $productos = $this->productoService->obtenerProductos();
        $marcas = $this->productoService->obtenerMarcas();

        return view('productos.index_productos', compact('productos', 'marcas'));
    }
    public function indexProductoMarca($slug)
    {
        $productos = $this->productoService->obtenerProductosPorMarca($slug);
        return view('productos.index_productos_marca', compact('productos', 'slug'));
    }

    public function obtenerProductoPorId(Request $request)
    {
        return $this->productoService->obtenerProductoPorId($request->id);
    }

    public function show($id)
    {
        $productos = $this->productoService->obtenerProductoPorImagen($id);

        return view('productos.detalles_producto', compact('productos', 'id'));
    }
}
