<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @include('/medico/superior')

    <!--  Referencias a los estilos de datatables -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
</head>
<body>
    
    <div class="container text-center text-primary rounded">
        <h1>Bienvenido</h1>
        <h3>Agenda de Citas</h3>
    </div>
    
    <hr>
    
        <div class="container col mb-5">
          <div id='agenda'></div>
        </div>
    
        <!-- Button trigger modal -->
        <!--button type="button" class="btn btn-primary" data-toggle="modal" data-target="#calendarModal">Launch</button-->
      
        <!-- Modal -->
        <div id="calendarModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
                        <h4 id="modalTitle" class="modal-title"></h4>
                    </div>
                    <div id="modalBody" class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
        </div>
    
    @include('/medico/inferior')
    
    <!-- Scripts JS y Bootstrap -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    
    
    <!--  Referencias a los JS de datatables -->
    
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    
    <!-- Estilos Responsivos para las datables -->
    
    <script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
    
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable( {
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                "language": {
                "lengthMenu": "Mostrar _MENU_ registros por páginas",
                "zeroRecords": "No se encuentra registro",
                "info": "Mostrando _PAGE_ of _PAGES_ páginas",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "search": "Buscar",
                "paginate": {
                    "first":      "Primero",
                    "last":       "Último",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                     }
                }
            } );
        } );     
    </script>
    
    <!-- Referencias a fullcalendar -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.7.2/main.min.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.7.2/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.7.2/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.7.2/locales-all.js"></script>
    
    <!-- Script de Fullcalendar -->
    
    <script src="{{ asset('js/agenda.js') }}"></script>
 </body>
</html>

