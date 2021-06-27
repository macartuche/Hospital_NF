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
    <main class="page service-page">
        <section class="clean-block clean-services dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Servicios Hospitalarios</h2>
                    <p>A continucación te presentamos algunos de los servicios hospitalarios que te ofrecemos.</p>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/cardiologia.jpg" width="100" height="230">
                            <div class="card-body">
                                <h4 class="card-title">Cardiología</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in.</p>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/traumatologia.jpg" height="230">
                            <div class="card-body">
                                <h4 class="card-title">Traumatología</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in.</p>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/neumonologia.jpg" height="230">
                            <div class="card-body">
                                <h4 class="card-title">Neumonología</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in.</p>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/pediatria.jpg" height="230">
                            <div class="card-body">
                                <h4 class="card-title">Pediatría</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in.</p>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/radiologia.jpg" height="230">
                            <div class="card-body">
                                <h4 class="card-title">Radiología</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in.</p>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card"><img class="card-img-top w-100 d-block" src="assets/img/scenery/odontologia.jpg" height="230">
                            <div class="card-body">
                                <h4 class="card-title">Odontología</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in.</p>
                            </div>
                            <div></div>
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