<div class="col-md-3 col-sm-12 mt-3 p-4">
    <div class="card">
        <div class="card-header fw-bold" id="div-descripcion-{{ $producto->id }}">
            {{ $producto->descripcion_producto }}
        </div>
        <div class="card-body">
            <div class="row align-items-center">
                <img class="producto-imagen"
                    src="@if ($producto->imagen == null) {{ asset('images/sin_imagen.png/') }} @else {{ asset('images/productos/') . '/' . strtolower($producto->nombre_marca) . '/' . $producto->imagen }} @endif"
                    alt="" srcset="">
            </div>
            <div class="row">
                <div class="col-md-6">Precio</div>
                <div class="col-md-6 fw-bold" id="div-precio-{{ $producto->id }}"> {{ $producto->precio }} </div>
            </div>
            <div class="row">
                <div class="col-md-6">IVA</div>
                <div class="col-md-6 fw-bold" id="div-iva-{{ $producto->id }}">{{ $producto->iva }}</div>
            </div>
            <div class="row">
                <div class="col-md-6">Precio con Iva</div>
                <div class="col-md-6 fw-bold" id="div-precio-iva-{{ $producto->id }}">{{ $producto->precio_con_iva }}</div>
            </div>
            <div class="row pb-2">
                <div class="col-md-6">Unidades</div>
                <div class="col-md-6">
                    <input type="text" name="unidades_pedido" id="unidades_pedido-{{ $producto->id }}" class="form-control">
                </div>
            </div>
            <div class="card-footer" class="row p-2">
                <button type="button" class="btn btn-primary float-end" id="boton-pedido" onclick="agregarAlPedido({{ $producto->id }})">Agregar al
                    Pedido</button>
            </div>
        </div>

    </div>
</div>
