$(document).ready(function(){
    init_DataTables();
});

function init_DataTables() {
    $('#companies').DataTable({
        ajax: {
            url: '/dashboard/companies.json'
        },
        language: {
            url: 'bower_components/datatables.net/locale/pt-br.json'
        },
        processing: true,
        serverSide: true,
        paging      : true,
        lengthChange: false,
        searching   : true,
        ordering    : true,
        info        : true,
        autoWidth   : false,
        columns: [
            {data: 'name', name: 'name'},
            {data: 'cnpj', name: 'cnpj'},
            {
                data: 'qtd', name: 'qtd',
                className: 'text-center',
                render: function (data, type, row){
                    var orders = 'Nenhum';
                    if (data > 0) {
                        orders = '<a href="/company/'+ row.id + '/orders">' + data + '</a>';
                    }
                    return orders;
                }
            },

            {
                targets: -1,
                data: null,
                render: function (data, type, row) {
                    if (data.id > 10) {
                        return '<a href="company/' + data.id + '/show" class="btn btn-primary btn-xs text-center">Ver</a>';
                    }
                    return null;
                },
                searchable: false,
                orderable: false,
                className: 'text-center'
            }
        ]
    })
}