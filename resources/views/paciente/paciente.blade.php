@extends('layouts.app')
@section('content')
    <!----------------------------------------------------- Data Tables ---------------------------------------------------------------------->
    <div class="container">
        <div>
            <h3>Administración de Pacientes</h3>
        </div>
        <div class="card-body">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Nuevo Paciente
            </button> 
            <hr>
            <table id="tablaPaciente" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <!--th>id</th-->
                        <th>Nombres</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Correo</th>
                        <th class="text-center">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pacientes as $paciente)
                        <tr>
                            <!--td>{{ $paciente->id }}</td-->
                            <td>{{ $paciente->name }} {{ $paciente->apellido }}</td>
                            <td>{{ $paciente->fechaNacimiento }}</td>
                            <td>
                                {{ $paciente->email }}
                            </td>
                            <td>
                                <div class="form-button text-center" class="d-inline">
                                    <!-- Formulario para editar paciente -->
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#editarPacienteModal{{ $paciente->id }}">Editar</button>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                        data-target="#citaModal{{ $paciente->id }}">Nueva Cita</button>
                                    <!-- Formulario para eliminar paciente -->
                                    <form action="{{ route('eliminarpaciente', $paciente->id) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @include('Modales/editarpaciente')
                        @include('Modales/crearcita')
                    @endforeach
                </tbody>
                <tfoot>
                </tfoot>
            </table>
            <hr>
        </div>
    </div>

    @include('Modales/crearpaciente')

@endsection
