@php
use Carbon\Carbon;

@endphp

@include('/administrador/superior')

<!----------------------------------------------------- Data Tables ---------------------------------------------------------------------->

<div class="container">

    <div>
        <h3>Aquí puede administrar las citas</h3>
    </div>

    <div class="card-body">

        <table id="tablaCitas" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <!--th>id</th-->
                    <th>Paciente</th>
                    <th>Especialidad</th>
                    <th>Medico Tratante</th>
                    <th>Fecha</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($citas as $cita)
                    @php
                        setlocale(LC_ALL, 'es_ES');
                        Carbon::setlocale('es');
                        $fecha = Carbon::create($cita->fecha_cita)->isoformat(' dddd d \d\e MMMM \d\e\l YYYY \a \l\a\s h:mm a');
                    @endphp
                    <tr>
                        <!--td>{{ $cita->id }}</td-->
                        <td>{{ $cita->paciente_id }}</td>
                        <td>{{ $cita->especialidad_id }}</td>
                        <td>{{ $cita->medico_id }}</td>
                        <td>
                            {{ $fecha }}
                        </td>
                        <td>
                            <div class="form-button text-center" class="d-inline">

                                <!-- Formulario para editar especialidad -->
                                <form action="{{ route('eliminarcita', $cita->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
            </tfoot>
        </table>
    </div>
</div>

@include('/administrador/inferior')


