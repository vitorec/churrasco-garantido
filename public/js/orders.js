$(document).ready(function(){

    $('#cnpj').inputmask();

});

$(document).on('click', '.remove-order', function (e) {
    e.preventDefault();
    var id = $(this).attr('data-id');

    $.confirm({
        title: 'Cancelar pedido',
        content: 'Confirmar o cancelamento deste pedido?',
        type: 'red',
        typeAnimated: true,
        backgroundDismiss: true,
        buttons: {
            ok: {
                text: 'Confirmar',
                btnClass: 'btn btn-primary',
                action: function () {
                   removeOrder(id);
                }
            },
            cancel: {
                text: 'Cancelar',
                btnClass: 'btn btn-default'
            }
        }
    });
});

function removeOrder(orderId){
    var token = $('input[name=_token]').val();
    $.ajax({
        url: '/order/delete/' + orderId,
        type: 'delete',
        data: { '_token': token },
        dataType: 'json',
        success: function (data) {
            // remove table row
            $('#order-' + data.id).remove();

            // show notification
            showSuccess('Pedido cancelado com sucesso!');
        }
    });
}

