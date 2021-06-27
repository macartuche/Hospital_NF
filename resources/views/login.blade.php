<!DOCTYPE html>
<html lang="es-419">

<!-- Aqui se extiende una plantilla que carga los estilos que necesita la página -->

@extends('plantillanav')

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="#">Hospital Nuestra Familia</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{url('inicio')}}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('servicios')}}">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('contacto')}}">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('login')}}">Acceder</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('registro')}}">Registro</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Inicio de Sesión</h2>
                    <p>Por favor coloque sus credenciales a continuación.</p>
                </div>
                <form>
                    <div class="form-group"><label for="email">Email</label><input class="form-control item" type="email" id="email"></div>
                    <div class="form-group"><label for="password">Contraseña</label><input class="form-control" type="password" id="password"></div>
                    <div class="form-group">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox"><label class="form-check-label" for="checkbox">Recuerdame</label></div>
                    </div><button class="btn btn-primary btn-block" type="submit">Inicio</button>
                </form>
            </div>
        </section>
    </main>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>