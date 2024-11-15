@extends('layouts.app')
@section('content')
    <style>
        .card-body img {
            max-width: 100%;
            height: auto;
        }

        @media (min-width: 768px) {
            .card-body img {
                max-width: 300px;
                /* Adjust the maximum width for larger screens */
            }
        }
    </style>
    <h4 class="text-center">Listado Marcas</h4>

    <div class="row">
        @foreach ($marcas as $marca)
            <div class="col-md-4 col-sm-12 mt-3 p-4" id="{{ $marca->slug}}">
                <a href="{{ url('productos_por_marca', $marca->slug) }}">
                    <div class="card">
                        <div class="card-header">
                            {{ $marca->nombre_marca }}
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <a href="{{ url('productos_por_marca', $marca->slug) }}">
                                    <img style="height: 100px; resize: contain"
                                        src="{{ $marca->imagen ? asset('images/marcas/') . '/' . $marca->imagen : asset('images/sin_imagen.png/') }}"
                                        alt="" srcset="">

                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
@endsection
