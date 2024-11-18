<!-- Modal Pedido-->
<div class="modal fade" id="modal-pedido" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title fw-bold" id="div-titulo-pedido">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body-pedido">
            <button onclick="compartirTablaWhatsApp()" class="btn btn-primary my-2 float-end mx-2">Compartir</button>
            <table class="table table-bordered" id="tabla-pedido">
                <thead>
                    <tr>
                        <th>Código</th>
                        {{-- <th>Descripcion</th> --}}
                        <th>Unidades</th>
                    </tr>
                </thead>
                <tbody id="tbody-pedido">

                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" id="boton-pedido" onclick="">Confirmar
                Pedido</button>
        </div>
    </div>
</div>
</div>
