<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admins">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-ambulance"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Hospital Nuestra Familia</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Elementos del panels de navegación del Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="admins">
            <i class="far fa-id-card"></i>

            @if (Auth::user()->rol_id == 1)
                <span>Panel del administrador</span>
            @elseif (Auth::user()->rol_id==2)
                <span>Panel del cliente</span>
            @else
                <span>Panel del especialidades</span>
            @endif
        </a>
        @auth
            <div class="container text-center text-white">{{ Auth::user()->name }}</div>
        @endauth
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Opciones
    </div>

    <!-- Nav Item - Ingreso de paciente -->
    @can('admin.paciente')
        <li class="nav-item">
            <a class="nav-link" href="adminpaciente">
                <i class="fas fa-bed"></i>
                <span>Ingreso de paciente</span>
            </a>
        </li>
    @endcan



    <!-- Nav Item - Agenda tu cita -->
    @can('admin.citas')
        <li class="nav-item">
            <a class="nav-link" href="admincitas">
                <i class="fas fa-calendar-alt"></i>
                <span>Administrar citas</span>
            </a>
        </li>
    @endcan


    <!-- Nav Item - Administrar Médicos -->
    @can('admin.medicos')
        <li class="nav-item">
            <a class="nav-link" href="adminmedicos">
                <i class="fas fa-address-book"></i>
                <span>Administrar Médicos</span>
            </a>
        </li>
    @endcan


    <!-- Nav Item - Administrar Especialidades -->
    @can('admin.especialidades.index')
        <li class="nav-item">
            <a class="nav-link" href="adminespecialidades">
                <i class="far fa-hospital"></i>
                <span>Administrar Especialidades</span>
            </a>
        </li>
    @endcan



    <!--   =================CLIENTES ==         -->
    <!-- menu de paciente con mismo texto pero diferente link
        no existe en el contralodr el metodo
    <li class="nav-item">
        <a class="nav-link" href="regpaciente">
            <i class="fas fa-bed"></i>
            <span>Ingreso de paciente</span></a>
    </li>-->

    @can('cliente.historial')
        <li class="nav-item">
            <a class="nav-link" href="historial">
                <i class="fas fas fa-address-card"></i>
                <span>Historial del paciente</span></a>
        </li>
    @endcan


    <!-- Nav Item - Agenda tu cita -->
    @can('cliente.citas')
        <li class="nav-item">
            <a class="nav-link" href="citas">
                <i class="fas fa-calendar-alt"></i>
                <span>Agendar citas</span>
            </a>
        </li>
    @endcan


    <!-- Nav Item - Recetas y Exámenes -->
    @can('cliente.pedidosmed')
    <li class="nav-item">
        <a class="nav-link" href="pedidosmed">
            <i class="fas fa-clipboard"></i>
            <span>Recetas y Exámenes</span>
        </a>
    </li>
    @endcan
    


    <!-- Nav Item - Logout -->

    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out"></i>
            <span>Salir</span></a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
