@extends('adminlte::page')

@section('title', 'Inicio | Portafolio')

@section('content_header')
    <h2 class="text-center font-weight-bold">¡Bienvenido a Mi Portafolio!</h2>
@stop

@section('content')

<!-- HERO / PRESENTACIÓN -->
<div class="row justify-content-center mb-4">
    <div class="col-12 col-md-10">
        <div class="card shadow">
            <div class="card-body text-center">

                <!-- Logo principal -->
                <img 
                    src="{{ asset('img/logoperfil.png') }}"
                    alt="Logo Alejandro Labrada"
                    class="img-fluid mb-3"
                    style="max-height: 280px;"
                >

                <h3 class="font-weight-bold">
                    Alejandro Labrada Muñoz
                </h3>

                <p class="text-muted mb-3">
                    Analista y Desarrollador Web enfocado en crear aplicaciones modernas,
                    funcionales y fáciles de usar.
                </p>

                <div class="d-flex justify-content-center flex-wrap gap-2">
                    <a href="{{ route('perfil') }}" class="btn btn-primary m-1">
                        <i class="fas fa-user mr-1"></i> Perfil Profesional
                    </a>
                    <a href="{{ route('habilidades') }}" class="btn btn-success m-1">
                        <i class="fas fa-fw fa-brain"></i> Habilidades
                    </a>
                    <a href="{{ route('proyectos') }}" class="btn btn-warning m-1">
                        <i class="fas fa-fw fa-laptop-code"></i> Proyectos
                    </a>
                    <a href="{{ route('servicios') }}" class="btn btn-danger m-1">
                        <i class="fas fa-fw fa-briefcase mr-1"></i> Servicios
                    </a>
                    <a href="{{ route('contacto') }}" class="btn btn-info m-1">
                        <i class="fas fa-envelope mr-1"></i> Contacto
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- RESUMEN PROFESIONAL -->
<div class="row">
    <div class="col-md-6 mb-3">
        <div class="card card-outline card-primary h-100 shadow">
            <div class="card-body">
                <h5 class="font-weight-bold">
                    <i class="fas fa-laptop-code mr-2"></i> ¿Qué hago?
                </h5>
                <p class="text-muted">
                    Desarrollo aplicaciones web usando tecnologías como Laravel, PHP,
                    JavaScript y bases de datos relacionales.
                </p>
                <p class="text-muted mb-0">
                    Me enfoco en soluciones claras, organizadas y escalables.
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-6 mb-3">
        <div class="card card-outline card-success h-100 shadow">
            <div class="card-body">
                <h5 class="font-weight-bold">
                    <i class="fas fa-graduation-cap mr-2"></i> Formación
                </h5>
                <p class="text-muted">
                    Tecnólogo en Análisis y Desarrollo de Sistemas de Información.
                </p>
                <p class="text-muted mb-0">
                    Experiencia académica y práctica en proyectos reales.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- TECNOLOGÍAS -->
<div class="card shadow mt-3">
    <div class="card-header bg-dark text-white text-center">
        <h5 class="mb-0">
            <i class="fas fa-tools mr-2"></i> Tecnologías que utilizo
        </h5>
    </div>
    <div class="card-body text-center">

        <span class="badge badge-danger p-2 m-1">Laravel</span>
        <span class="badge badge-primary p-2 m-1">PHP</span>
        <span class="badge badge-warning p-2 m-1">JavaScript</span>
        <span class="badge badge-info p-2 m-1">MySQL</span>
        <span class="badge badge-secondary p-2 m-1">HTML5</span>
        <span class="badge badge-secondary p-2 m-1">CSS3</span>
        <span class="badge badge-dark p-2 m-1">Git</span>
        <span class="badge badge-primary p-2 m-1">Bootstrap</span>

    </div>
</div>

@stop
