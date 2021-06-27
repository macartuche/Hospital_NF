@extends('layouts.principal')

@section('content')
<section class="clean-block clean-form dark">
    <div class="container">
        <div class="block-heading">
            <h2 class="text-info">Registro</h2>
            <p>Registrate y reserva tu cita con los mejores profesioales.</p>
        </div>
        <form>
            <div class="form-group"><label for="cedula">Número de Cédula</label><input class="form-control item" type="text" id="cedula"></div>
            <div class="form-group"><label for="nombres">Nombres</label><input class="form-control item" type="text" id="nombres"></div>
            <div class="form-group"><label for="apellidos">Apellidos</label><input class="form-control item" type="text" id="apellidos"></div>
            <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email" id="email"></div>
            <div class="form-group"><label for="teledono">Teléfono</label><input class="form-control item" type="text" id="teledono"></div>
            <div class="form-group"><label for="direccion">Dirección</label><input class="form-control item" type="text" id="direccion"></div>
            <div class="form-group"><label for="ciudad_residencia">Ciudad de residencia</label><input class="form-control item" type="text" id="ciudad_residencia"></div>
            <div class="form-group"><label for="fecha_nacimiento">Fecha de Nacimiento</label><input class="form-control item" type="text" id="fecha_nacimiento"></div>
            <div class="form-group"><label for="genero">Género</label><input class="form-control item" type="genero" id="genero"></div>
            <button class="btn btn-primary btn-block" type="submit">Registro</button>
        </form>
    </div>
</section>


@endsection