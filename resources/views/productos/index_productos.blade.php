@extends('layouts.app')
@section('content')

    <div class="row">
        <h4 class="text-center">Listado Productos</h4>
    </div>
    <div class="row">
        <div class="col align-self-start">
            <x-seguimiento-pedido />
        </div>
    </div>
    <div class="row mt-3 mx-4">
        @foreach ($marcas as $marca)

            {{-- Titulo marcas --}}
            <span class="badge bg-primary fs-5">{{ $marca->nombre_marca }}</span>

            {{-- Filtrar productos de la marca actual --}}
            @php
                $productosDeMarca = $productos->where('marca_id', $marca->id);
            @endphp

            @if ($productosDeMarca->isEmpty())
                {{-- Mensaje si no hay productos --}}
                <div class="col-12 mt-2">
                    <p class="text-muted">No hay productos disponibles para esta marca.</p>
                </div>
            @else
                @foreach ($productosDeMarca as $producto)
                <x-detalle-producto-categoria :producto="$producto" :marca="$marca" />

                @endforeach
            @endif

            {{-- Separador entre marcas --}}
            <hr class="my-4">
        @endforeach
    </div>
<x-modal-seguimiento-pedido />
@section('js')
    <script>
        const ruta_assets = "{{ asset('images') }}";
    </script>
    <script src="{{ asset('js/pages/index_productos.js') }}"></script>
@endsection
@endsection
