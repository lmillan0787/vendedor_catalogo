@extends('layouts.app')
@section('content')
    <div class="row">
        <h4 class="text-center">Listado Productos por Marca</h4>
    </div>
    <div class="row">
        <div class="col-md-6 mx-4">
            <x-seguimiento-pedido />
            <a href="{{ route('marcas') }}#{{ $slug }}" class="btn btn-dark text-white">Volver</a>
        </div>
    </div>

    <div class="row">
        @foreach ($productos as $producto)
            <x-detalle-producto :producto="$producto" />
        @endforeach
    </div>
    </div>



    <!-- Modal Pedido-->
    <x-modal-seguimiento-pedido />
@section('js')
    <script>
        const ruta_assets = "{{ asset('images') }}";
    </script>
    <script src="{{ asset('js/pages/index_productos.js') }}"></script>
@endsection
@endsection
