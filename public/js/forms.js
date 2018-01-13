$(document).ready(function(){

    $('#cnpj').inputmask();

    $('.select2').select2({
        allowClear: true
    });

    $('.select-company').select2({
        allowClear: true,
        ajax: {
            url: '/order/new/companies.json',
            dataType: 'json',
            delay: 250
        }
    });
});

$('#add-button').on('click', function(){
    var elProduct = $('#product');
    var elQtd = $('#qtd');
    var form = $('#new-order');
    var table = $('#list');
    var qtd = elQtd.val();

    // adicionar os dados na tabela e os inputs no form
    if (elProduct.val() !== '' && (elQtd.val() !== '' && qtd > 0)){
        var product = elProduct.select2('data');
        var id = product[0].id;
        var name = product[0].text;
        var data = {id: id, name: name, qtd: qtd};

        appendInput(form, id, 'products['+ id +']', qtd);
        appendRow(table, data);

        // desabilitar a option selecionada no select2
        disableOptionSelect(elProduct);

        // limpar os inputs product e qtd
        clearFields(elProduct, elQtd);
    }
    else {
        showErrors();
    }
});

$('#product').on('select2:select', function () {
    $(this).parent().removeClass('has-error');
    $('#msg-product').hide();
});


$('#qtd').on('change', function () {
    var qtd = parseInt($(this).val());
    if ($(this).val() !==  '' && qtd > 0) {
        $(this).parent().removeClass('has-error');
        $('#msg-qtd').hide();
    }
});

$(document).on('click', '.remove-item', function (e) {
    e.preventDefault();
    var id = $(this).attr('data-id');
    removeItem(id);
});

$('#new-company').on('submit', function(e){
    e.preventDefault();
    var form = $(this)[0];
    var cnpj = $('#cnpj').val();
    if (validarCNPJ(cnpj)){
        $('.validate').removeClass('has-error').addClass('has-success');
        $('.help-block').hide();
        form.submit();
    }
    else {
        $('.validate').removeClass('has-success').addClass('has-error');
        $('.help-block').show();
    }
});
