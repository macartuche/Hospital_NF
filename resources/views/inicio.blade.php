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
                    <li class="nav-item"><a class="nav-link" href="{{url('login')}}">Acceder</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{url('register')}}">Registro</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page landing-page">
        <section class="clean-block clean-hero" style="color: rgba(9, 162, 255, 0.85);background: url(&quot;assets/img/tech/79134-hospitales.jpg&quot;) round;background-size: contain;">
            <div class="text">
                <h2 style="font-size: 39px;">Bienvenido al sistema de gestión del Hospital Nuestra Familia</h2>
                <p style="font-size: 25px;">Tu salud en las mejores manos</p>
            </div>
        </section>
        <section class="clean-block clean-info dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Información</h2>
                    <p style="font-size: 22px;">Nuestro objetivo siempre será el brinda un servcio de salud de calidad para usted y toda su familia.</p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="assets/img/scenery/ima1.jpg"></div>
                    <div class="col-md-6">
                        <h3>Usted y su familia son la más importante</h3>
                        <div class="getting-started-info">
                            <p>En el Hospital Nuestra Familia, nos preocupamos por darle la mejor antención en nuestras espcialidades. Será para nosotros un gusto poder atenderlo.</p>
                        </div>                     
                    </div>
                </div>
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