$(document).ready(function () {

})

// funciones
function mostrarDetalleProducto(producto) {
    $.ajax({
        type: 'post',
        url: `${url_base}/obtener-producto-por-id`,
        data: {
            _token: _token,
            'id': producto
        },
        success: function (data) {
            console.log(data);
            $('#div-imagen').attr('src', data.imagen ? ruta_assets + '/productos/' + data.imagen :
                ruta_assets + '/sin_imagen.png')
            $('#div-descripcion').html(data.descripcion_producto)
            $('#div-precio').html(data.precio + '$')
            $('#div-iva').html(data.iva + '$')
            $('#div-precio-iva').html(data.precio_con_iva + '$')

            $('#boton-pedido').attr('onclick', 'agregarAlPedido("' + data.codigo_producto + '")');
            $('#exampleModal').modal('show');
        }
    })

}

function agregarAlPedido(producto) {

    if (!$('#unidades_pedido-'+producto).val()) {
        Swal.fire({
            title: 'Error!',
            text: 'Debe ingresar las unidades a pedir',
            icon: 'error',
            confirmButtonText: 'Cerrar'
          })
        return;
    }

    let pedido = localStorage.getItem('pedido') ? JSON.parse(localStorage.getItem('pedido')) : []; // Obtener el pedido existente o crear uno nuevo

    let nuevoProducto = {
        codigo: producto,
        descripcion: $('#div-descripcion-'+producto).text(),
        unidades: $('#unidades_pedido-'+producto).val()
    };

    pedido.push(nuevoProducto); // Agregar el nuevo producto al array

    Swal.fire({
        title: 'Correcto!',
        text: 'Producto agregado al pedido',
        icon: 'success',
        confirmButtonText: 'Cerrar'
      })

    localStorage.setItem('pedido', JSON.stringify(pedido)); // Guardar el pedido actualizado
    $('#unidades_pedido-'+producto).val('');

}

function verPedido() {

    $('#div-titulo-pedido').text('Listado de pedido');
    $('#tbody-pedido').html('');
    let pedido = localStorage.getItem('pedido') ? JSON.parse(localStorage.getItem('pedido')) : []; // Obtener el pedido existente o crear uno nuevo

    if (pedido.length > 0) {

        pedido.forEach(producto => {
            $('#tbody-pedido').append(
                `<tr>
                    <td>${producto.codigo}</td>
                    <td>${producto.descripcion}</td>
                    <td>${producto.unidades}</td>
                    <td><a role="button" onclick="eliminarProductoPedido('${producto.codigo}')">X</a></td>
                </tr>`
            )
        });
    }

    $('#modal-pedido').modal('show');

}

function eliminarPedido() {

    Swal.fire({
        title: 'Confirmar',
        text: "¿Desea restablecer el pedido?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar',
        cancelButtonText: 'Cancelar'
      }).then((result) => {
        if (result.isConfirmed) {
            localStorage.setItem('pedido', JSON.stringify([]));

            Swal.fire({
                title: 'Correcto!',
                text: 'Pedido restablecido',
                icon: 'success',
                confirmButtonText: 'Cerrar'
              })


        }
      })


}

function eliminarProductoPedido(codigo) {
    console.log(codigo)
    let datos = localStorage.getItem('pedido');

    if (datos) {
        let pedido = JSON.parse(datos);
        let index = pedido.findIndex(producto => producto.codigo === codigo);
        if (index !== -1) {
            pedido.splice(index, 1);
            localStorage.setItem('pedido', JSON.stringify(pedido));
            verPedido();
        }
    }
}

function copiarTabla() {
    const tabla = document.getElementById('tabla-pedido');
    let contenido = '';

    // Recorrer las filas de la tabla
    for (let i = 0; i < tabla.rows.length; i++) {
        let fila = tabla.rows[i];
        let filaContenido = [];

        // Recorrer las celdas de cada fila, omitiendo la cuarta columna (índice 3)
        for (let j = 0; j < fila.cells.length; j++) {
            if (j !== 3) { // Omitir la columna de índice 3 (Ocupación)
                filaContenido.push(fila.cells[j].innerText); // Obtener el texto de la celda
            }
        }

        contenido += filaContenido.join('\t') + '\n'; // Unir celdas con tabulaciones y agregar nueva línea
    }

    // Copiar el contenido al portapapeles
    navigator.clipboard.writeText(contenido)
        .then(() => {
            console.log('Contenido copiado al portapapeles');
        })
        .catch(err => {
            console.error('Error al copiar: ', err);
        });
}

function validarBotonEliminar() {

    if (localStorage.getItem('pedido')) {
        $('#boton-pedido').attr('disabled', false);
    }
}
