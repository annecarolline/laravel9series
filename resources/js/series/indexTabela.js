
$(document).ready(function () {
	var tabelaData = $('.datatable').dataTable({
        dom: "<'row'<'col-sm-3'l><'col-sm-6 text-center'B><'col-sm-3'f>>tp",
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "todas"]], 
        //"language": { "url": "//cdn.datatables.net/plug-ins/2.0.5/i18n/pt-BR.json"},
        //"language": { "url": "{{ asset('js/seriesJs/datatables.net/Portuguese-Brasil.json') }}"},
        buttons: [
            {extend: 'copy', text: 'Copiar <i class="fa fa-files-o"></i>', className: 'btn-sm'},
            //{extend: 'excel',text: 'Salvar Excel <i class="fa fa-file-excel-o"></i>'},
            //{extend: 'pdf', text: 'Salvar PDF <i class="fa fa-file-pdf-o"></i>', title: 'SISGES', className: 'btn-sm', orientation: 'landscape'},
            {extend: 'print',customize: function ( win ) {
                    $(win.document.body).css( 'font-size', '7pt' );
                    $(win.document.body).find( 'table' ).addClass( 'compact' ).css( 'font-size', 'inherit' );
                }, text: 'Imprimir <i class="fa fa-print"></i>', className: 'btn-sm',  orientation: 'landscape', exportOptions: {columns: ':visible'}},
//           btn btn-default buttons-print btn-sm
            {extend: 'colvis', text: 'Ocultar colunas <i class="fa fa-compress"></i>', className: 'btn-sm'}
        ]
    });
});