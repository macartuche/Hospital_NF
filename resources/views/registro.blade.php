<!DOCTYPE html>
<html lang="es-419">

<!-- Aqui se extiende una plantilla que carga los estilos que necesita la página -->

@extends('plantillaprincipalsuperior')

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <i class="fas fa-ambulance fa-3x"></i>
        <div class="container"><a class="navbar-brand logo" href="#">Hospital Nuestra Familia</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{url('inicio')}}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('servicios')}}">Servicios</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('contacto')}}">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('login')}}">Acceder</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('register')}}">Registro</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page registration-page">
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
    </main>
    <footer class="page-footer dark">
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
