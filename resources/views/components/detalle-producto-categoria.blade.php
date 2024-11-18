<div class="col-md-2 col-6 mt-3 p-4" id="{{ $producto->id }}">
    <a href="{{route('productos.detalles.producto', ['id' => $producto->id]) }}">
        <div class="card">
            <div class="card-header-responsive fw-bold">
                {{ $producto->descripcion_imagen }}
            </div>
            <div class="card-body">
                <div class="row align-items-center">
                    <a href="{{route('productos.detalles.producto', ['id' => $producto->id])}}">
                        <img class="producto-imagen" src="@if ($producto->imagen == null) {{ asset('images/sin_imagen.png/') }} @else {{ asset('images/productos/') . '/' . strtolower($marca->nombre_marca) . '/'  . $producto->imagen }} @endif"
                            alt="" srcset="">
                    </a>
                </div>
            </div>
        </div>
    </a>
</div>
