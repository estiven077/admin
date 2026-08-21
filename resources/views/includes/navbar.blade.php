<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #16780c;">
    <div class="container-fluid">

        <!-- LOGO SENA -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="https://www.sena.edu.co/Paginas/img/logo-sena-blanco.png" alt="logo_sena" width="45" height="45" class="me-2">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <!-- ELEMENTOS DEL MENÚ (IZQUIERDA) -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-lg-center">
                
                <!-- 1. QUIÉNES SOMOS -->
                 <li class="nav-item">
                <a class="nav-link text-white fw-bold" href="{{ route('home') }}#quienes-somos">Quiénes Somos</a>
            </li>
                

                <!-- 2. ADMINISTRACIÓN (Desplegable solo con las 6 Tablas/Listados) -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-bold" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Administración
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('area.index') }}">Áreas</a></li>
                        <li><a class="dropdown-item" href="{{ route('training_center.index') }}">Centros de Formación</a></li>
                        <li><a class="dropdown-item" href="{{ route('computer.index') }}">Computadores</a></li>
                        <li><a class="dropdown-item" href="{{ route('course.index') }}">Cursos</a></li>
                        <li><a class="dropdown-item" href="{{ route('teacher.index') }}">Instructores</a></li>
                        <li><a class="dropdown-item" href="{{ route('apprentice.index') }}">Aprendices</a></li>
                    </ul>
                </li>
            </ul>

            <!--BUSCADOR + INICIAR SESIÓN -->
            <div class="d-flex align-items-center flex-column flex-lg-row">
                
                <!-- BUSCADOR -->
                <form class="d-flex me-lg-3 mb-2 mb-lg-0" role="search" action="#" method="GET">
                    <div class="input-group">
                        <input class="form-control form-control-sm" type="search" placeholder="Buscar..." aria-label="Buscar" name="query">
                        <button class="btn btn-outline-light btn-sm" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>

                <!-- INICIAR SESIÓ -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white fw-bold px-0 px-lg-2" href="{{ url('/login') }}">
                            Iniciar Sesión
                        </a>
                    </li>
                </ul>

            </div>

        </div>
    </div>
</nav>