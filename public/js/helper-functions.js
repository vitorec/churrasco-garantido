// Add a product to the form
function appendInput(form, id, name, value){
    $('<input>').attr({
        type: 'hidden',
        id: 'product-' + id,
        name: name,
        value: value
    }).appendTo(form);
}

// Add a product to the products table
function appendRow(table, product){
    var button = '<a href="#" class="btn btn-danger btn-xs remove-item" data-id=' + product.id +
        '><i class="fa fa-fw fa-remove"></a>';
    var row = '<tr id="row-' + product.id + '">' +
        '<td>' + product.name + '</td>' +
        '<td>' + product.qtd + '</td>' +
        '<td class="text-center">' + button + '</td>' +
        '</tr>';
    table.append(row);
}

// Enable the select option by value
function enableOptionSelect(element, value){
    element.find('option[value=' + value + ']').removeAttr('disabled');
    element.select2();
}

// Disable the option selected
function disableOptionSelect(element){
    element.find('option:selected').attr('disabled', 'disabled');
    element.select2();
}

// Show errors at the product and qtd fields
function showErrors() {
    var elProduct = $('#product');
    var elQtd = $('#qtd');
    var qtd = parseInt(elQtd.val());

    if (elProduct.val() === ''){
        elProduct.addClass('has-error');
        elProduct.parent().addClass('has-error');
        $('#msg-product').show();
    }
    if (elQtd.val() === '' || qtd <= 0){
        elQtd.addClass('has-error');
        elQtd.parent().addClass('has-error');
        $('#msg-qtd').show();
    }
}

function showSuccess(message){
    $.alert({
        title: message,
        content: null,
        type: 'green',
        backgroundDismiss: true,
        closeIcon: true
    });
}

// Clear the product and qtd fields
function clearFields(elProduct, elQtd) {
    elProduct.val(null).change();
    elQtd.val('');
}

// Remove a product from the table and the form
function removeItem(id) {
    var elProduct = $('#product');
    $('#row-' + id).remove();
    $('#product-' + id).remove();
    enableOptionSelect(elProduct, id);
}

function validarCNPJ(cnpj) {

    cnpj = cnpj.replace(/[^\d]+/g, '');

    if (cnpj == '') return false;

    if (cnpj.length != 14)
        return false;

    // Elimina CNPJs invalidos conhecidos
    if (cnpj == "00000000000000" ||
        cnpj == "11111111111111" ||
        cnpj == "22222222222222" ||
        cnpj == "33333333333333" ||
        cnpj == "44444444444444" ||
        cnpj == "55555555555555" ||
        cnpj == "66666666666666" ||
        cnpj == "77777777777777" ||
        cnpj == "88888888888888" ||
        cnpj == "99999999999999")
        return false;

    // Valida DVs
    var tamanho = cnpj.length - 2
    var numeros = cnpj.substring(0, tamanho);
    var digitos = cnpj.substring(tamanho);
    var soma = 0;
    var pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2)
            pos = 9;
    }
    var resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(0))
        return false;

    tamanho = tamanho + 1;
    numeros = cnpj.substring(0, tamanho);
    soma = 0;
    pos = tamanho - 7;
    for (i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2)
            pos = 9;
    }
    resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
    if (resultado != digitos.charAt(1))
        return false;

    return true;

}



