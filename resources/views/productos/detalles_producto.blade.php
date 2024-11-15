@extends('layouts.app')
@section('content')
    <div class="row">
        <h4 class="text-center">Listado Productos</h4>
    </div>
    <div class="row">
        <div class="col-md-6 mx-4">
            <x-seguimiento-pedido />
            <a href="{{ route('productos') }}#{{ $id }}" class="btn btn-dark text-white">Volver</a>
        </div>
    </div>
    <div class="row mt-3 mx-4">
        @foreach ($productos as $producto)
        <x-detalle-producto :producto="$producto" />

   {{-- Modal Seguimiento --}}
   <x-modal-seguimiento-pedido />
    @endforeach
    </div>
@section('js')
    <script>
        const ruta_assets = "{{ asset('images') }}";
    </script>
    <script src="{{ asset('js/pages/index_productos.js') }}"></script>
@endsection
@endsection
