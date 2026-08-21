@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="text-center my-4 fw-bold">
        Sistema de Administración SENA
    </h1>

    <!-- =================== CARRUSEL =================== -->
    <div id="carouselExampleCaptions" class="carousel slide mb-5 shadow rounded overflow-hidden" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="{{ asset('img/img1.jpg') }}" class="d-block w-100" style="height:500px; object-fit:cover;" alt="Bienvenido">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                    <h5>Bienvenido</h5>
                    <p>Sistema de Administración SENA.</p>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="{{ asset('img/img2.jpg') }}" class="d-block w-100" style="height:500px; object-fit:cover;" alt="Cursos">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                    <h5>Cursos</h5>
                    <p>Consulta todos los cursos.</p>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="{{ asset('img/img3.jpg') }}" class="d-block w-100" style="height:500px; object-fit:cover;" alt="Aprendices">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded p-3">
                    <h5>Aprendices</h5>
                    <p>Administra aprendices e instructores.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- =================== SECCIÓN: QUIÉNES SOMOS =================== -->
<div id="quienes-somos" class="my-5">

    <h2 class="text-center mb-4 fw-bold text-success">
        ¿Quiénes Somos?
    </h2>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card border-0 shadow-sm p-4">
                <div class="card-body text-center">

                    <h3 class="fw-bold mb-3">
                        Sistema de Administración SENA
                    </h3>

                    <p class="text-muted">
                        Admin SENA es un sistema diseñado para facilitar la
                        administración y organización de la información
                        relacionada con la formación del SENA.
                    </p>

                    <p class="text-muted">
                        Nuestro sistema permite gestionar de manera sencilla
                        aprendices, instructores, cursos, áreas, centros de
                        formación y computadores, manteniendo la información
                        organizada y accesible.
                    </p>

                    <div class="row mt-4">

                        <div class="col-md-4 mb-3">
                            <div class="p-3">
                                <i class="fas fa-users text-success fa-2x mb-2"></i>
                                <h5 class="fw-bold">Aprendices</h5>
                                <p class="text-muted">
                                    Administración de la información de los
                                    aprendices.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="p-3">
                                <i class="fas fa-chalkboard-teacher text-success fa-2x mb-2"></i>
                                <h5 class="fw-bold">Instructores</h5>
                                <p class="text-muted">
                                    Gestión de instructores y su información
                                    relacionada.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="p-3">
                                <i class="fas fa-book text-success fa-2x mb-2"></i>
                                <h5 class="fw-bold">Formación</h5>
                                <p class="text-muted">
                                    Gestión de cursos, áreas y centros de
                                    formación.
                                </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

    <!-- =================== SECCIÓN: ANUNCIOS / OFERTAS =================== -->
    <div class="my-5">
        <h2 class="text-center mb-4 fw-bold text-success">Anuncios y Ofertas Educativas</h2>
        
        <div class="row row-cols-1 row-cols-md-3 g-4">
            
            <!-- Anuncio 1 -->
            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('img/anuncio1.jpg') }}" class="card-img-top" alt="Anuncio 1" style="height: 220px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Área de Salud</h5>
                        <p class="card-text text-muted flex-grow-1">
                            Apertura de inscripciones para programas técnicos y tecnológicos en el área de la salud. ¡Forma parte del sector productivo!
                        </p>
                        <a href="#" class="btn btn-outline-success mt-auto w-100 fw-bold">Ver más</a>
                    </div>
                </div>
            </div>

            <!-- Anuncio 2  -->
            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('img/anuncio2.jpg') }}" class="card-img-top" alt="Anuncio 2" style="height: 220px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Sector Agrícola y Turismo</h5>
                        <p class="card-text text-muted flex-grow-1">
                            Conoce las nuevas convocatorias para proyectos agroindustriales y de turismo en la región.
                        </p>
                        <a href="#" class="btn btn-outline-success mt-auto w-100 fw-bold">Ver más</a>
                    </div>
                </div>
            </div>

            <!-- Anuncio 3 -->
            <div class="col">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('img/anuncio3.jpg') }}" class="card-img-top" alt="Anuncio 3" style="height: 220px; object-fit: cover;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Tecnología en ADSO</h5>
                        <p class="card-text text-muted flex-grow-1">
                            Formación en Análisis y Desarrollo de Software. Desarrolla competencias en tecnologías web, móviles y bases de datos.
                        </p>
                        <a href="#" class="btn btn-outline-success mt-auto w-100 fw-bold">Ver más</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <hr class="my-5">

    <!-- =================== SECCIÓN: MISIÓN Y VISIÓN =================== -->
    <div class="row g-4 mb-5">
        <!-- Misión -->
        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm p-4 bg-light">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-bullseye text-success fa-2x me-3"></i>
                        <h3 class="card-title mb-0 fw-bold">Misión</h3>
                    </div>
                    <p class="card-text text-muted">
                        El SENA está encargado de cumplir la función que le corresponde al Estado de invertir en el desarrollo social y técnico de los trabajadores colombianos, ofreciendo y ejecutando la formación profesional integral, para la incorporación y el desarrollo de las personas en actividades productivas que contribuyan al desarrollo social, económico y tecnológico del país.
                    </p>
                </div>
            </div>
        </div>

        <!-- Visión -->
        <div class="col-md-6">
            <div class="card h-100 border-0 shadow-sm p-4 bg-light">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-eye text-success fa-2x me-3"></i>
                        <h3 class="card-title mb-0 fw-bold">Visión</h3>
                    </div>
                    <p class="card-text text-muted">
                        Consolidar al SENA como una entidad de formación de clase mundial, con un modelo educativo innovador y tecnológico, que responda de manera oportuna y pertinente a los desafíos del sector productivo nacional y global, potenciando el talento humano de la región.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-5">

    <!-- =================== SECCIÓN: CONTÁCTANOS =================== -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm border-0 p-4">
                <h3 class="text-center mb-4 fw-bold">Contáctanos</h3>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="name" class="form-label">Nombre Completo</label>
                            <input type="text" class="form-control" id="name" placeholder="Ej. Juan Pérez" required>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="nombre@correo.com" required>
                        </div>
                        <div class="col-12">
                            <label for="subject" class="form-label">Asunto</label>
                            <input type="text" class="form-control" id="subject" placeholder="Asunto del mensaje" required>
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Mensaje o Sugerencia</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Escribe aquí tu consulta..." required></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-success px-5 py-2">Enviar Mensaje</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection