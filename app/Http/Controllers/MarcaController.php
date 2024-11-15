<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MarcaService;


class MarcaController extends Controller
{
    public $marcaService;

    public function __construct(MarcaService $marcaService)
    {
        $this->marcaService = $marcaService;
    }

    public function index()
    {
        $marcas = $this->marcaService->obtenerMarcas();
        return view('marcas.index_marcas', compact('marcas'));
    }

}
