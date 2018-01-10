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
                data: 'id', name: 'id',
                className: 'text-center',
                render: function (data, type, row){
                    return '<a href="/company/'+ data + '/orders">' + data + '</a>';
                }
            },
        ]
    })
}