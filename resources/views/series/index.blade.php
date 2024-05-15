<x-layout title="Séries" breadcrumb0="Séries" breadcrumb1="">

    <script type="text/javascript" src="{{ asset('/js/seriesJs/indexTabela.js') }}"></script>

    <main>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
            <a class="btn btn-warning mb-2" href="/series/criar">Adicionar Série</a>

            <table id='datatabela' class='table table-striped' style='width:100%'>
            </table>
        </div>
    </main>

    <footer>
        
        <script type="text/javascript" charset="utf-8">

            $(document).ready(function() {
                const seriesObj = {{ Js::from($series) }}; 
                var seriesArr = [];
                
                seriesObj.forEach(function(serie, i) {
                    seriesArr[i] = [serie['titulo'],serie['ano'],serie['categoria'],serie['elenco']];
                });
                
                console.log(seriesArr);

                seriesArr.forEach(r => {
                    var div1 = document.createElement('div');
                    div1.innerHTML = r[1];
                    r[1] = div1;

                    var div3 = document.createElement('div');
                    div3.innerHTML = r[3];
                    r[3] = div3;
                });

                const tabelaData = new DataTable('#datatabela', {
                    dom: "<'row'<'col-sm-3'l><'col-sm-6 text-center'B><'col-sm-3'f>>tp",
                    "lengthMenu": [[5,10,15,20, 25, -1], [5,10,15,20, 25, "Todas"]],
                    "oLanguage": {
                        "sLengthMenu": "Mostrar _MENU_ registros por página",
                        "sZeroRecords": "Nenhum registro encontrado",
                        "sInfo": "Mostrando _START_ / _END_ de _TOTAL_ registro(s)",
                        "sInfoEmpty": "Mostrando 0 / 0 de 0 registros",
                        "sInfoFiltered": "(filtrado de _MAX_ registros)",
                        "sSearch": "Pesquisar: ",
                        "oPaginate": {
                            "sFirst": "Início",
                            "sPrevious": "Anterior",
                            "sNext": "Próximo",
                            "sLast": "Último"
                        }
                    }, 
                    columns: [
                        { title: 'Título' },
                        { title: 'Ano' },
                        { title: 'Categoria' },
                        { title: 'Elenco' }
                    ],
                    data: seriesArr
                });
            });
        </script>

    </footer>
</x-layout>