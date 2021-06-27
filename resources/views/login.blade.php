@extends('layouts.principal')

@section('content')
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Inicio de Sesión</h2>
                <p>Por favor coloque sus credenciales a continuación.</p>
            </div>

            <form method="POST" action="{{ route('login.custom') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control item" placeholder="Correo electrónico" id="email" name="email" required
                autofocus"/>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input class="form-control" type="password" placeholder="Contraseña" id="password"
                    name="password" required/>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-group">
                <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox"><label
                        class="form-check-label" for="checkbox">Recuerdame</label></div>
            </div><button class="btn btn-primary btn-block" type="submit">Inicio</button>
         </form>
        </div>
    </section>

@endsection
