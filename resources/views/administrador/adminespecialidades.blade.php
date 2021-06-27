@include('/administrador/superior')

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Administración de Especialidades</title>
    </head>

    <body>
        <!----------------------------------------------------- Data Tables ---------------------------------------------------------------------->

        <div class="container">

            <div>
                <h3>Administración de especialidades</h3>
            </div>

            <div class="card-body">

                <button type="button" class="btn btn-primary btnespecialidadModal" data-toggle="modal" data-target="#especialidadModal">
                    Nueva Especialidad
                  </button>

                <hr>

                <table id="tablaEspecialidad" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <!--th>id</th-->
                            <!--th>Código</th-->
                            <th>Especialidad</th>
                            <th>Descripción</th>
                            {{-- <th>Medico Tratante</th> --}}
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($especialidades as $especialidad)
                            <tr>
                                <!--td>{{ $especialidad->id }}</td-->
                                <!--td>{{ $especialidad->codigo_esp }}</td-->
                                <td>{{ $especialidad->especialidad }}</td>
                                <td>{{ $especialidad->descripcion }}</td>
                                {{-- <td>Prueba</td> --}}
                                <td>
                                    <div class="form-button" class="d-inline">
                                    <!-- Formulario para editar especialidad -->

                                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editarEspecialidadModal{{$especialidad->id}}">Editar</button>

                                    <!-- Formulario para eliminar especialidad -->
                                    <form action="{{ route('eliminaresp', $especialidad->id)}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                    </div>

                                </td>
                            </tr>
                            @include('Modales/editarespecialidad')
                        @endforeach
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
            </div>
        </div>

        @include('Modales/crearespecialidad')
      
    </body>
</html>



@include('/administrador/inferior')

{{-- <!-- Scripts JS y Bootstrap -->

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!--  Referencias a los JS de datatables -->

<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<!-- Estilos Responsivos para las datables -->

<script src="https://cdn.datatables.net/rowreorder/1.2.7/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>

<script src="{{ asset('js/modal_datatable_crud_especialidad.js') }}"></script> --}}

