@extends('adminlte::page')

@section('title', 'Servicios')

@section('content_header')
    <h1 class="text-center">Servicios Profesionales</h1>
    <p class="text-center text-muted">
        Soluciones digitales enfocadas en calidad, rendimiento y escalabilidad
    </p>
@stop

@section('content')

<div class="row mb-4">

    <div class="col-md-4">
        <div class="info-box bg-info">
            <span class="info-box-icon"><i class="fas fa-graduation-cap"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Formación</span>
                <span class="info-box-number">SENA / USC</span>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="info-box bg-success">
            <span class="info-box-icon"><i class="fas fa-project-diagram"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Proyecto Destacado</span>
                <span class="info-box-number">Párchate</span>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="info-box bg-warning">
            <span class="info-box-icon"><i class="fas fa-seedling"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Nivel</span>
                <span class="info-box-number">Junior</span>
            </div>
        </div>
    </div>

</div>


<div class="card shadow">
    <div class="card-header bg-info text-white">
        <h5 class="mb-0">
            <i class="fas fa-concierge-bell mr-2"></i> Servicios
        </h5>
    </div>

    <div class="card-body">
        <div class="row">

            <div class="col-md-4 mb-3">
                <div class="card card-outline card-primary h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-code fa-3x text-primary mb-3"></i>
                        <h5>Desarrollo Web</h5>
                        <p class="text-muted">
                            Desarrollo de aplicaciones web modernas con Laravel,
                            PHP y JavaScript.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card card-outline card-success h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-database fa-3x text-success mb-3"></i>
                        <h5>Bases de Datos</h5>
                        <p class="text-muted">
                            Diseño, optimización y mantenimiento de bases de datos
                            relacionales.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card card-outline card-warning h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-tools fa-3x text-warning mb-3"></i>
                        <h5>Soporte Técnico</h5>
                        <p class="text-muted">
                            Corrección de errores, mantenimiento y mejoras
                            continuas.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card card-outline card-info h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-project-diagram fa-3x text-info mb-3"></i>
                        <h5>Análisis de Sistemas</h5>
                        <p class="text-muted">
                            Levantamiento de requerimientos y documentación técnica.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card card-outline card-danger h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-shield-alt fa-3x text-danger mb-3"></i>
                        <h5>Buenas Prácticas de Seguridad</h5>
                        <p class="text-muted">
                            Control de accesos y protección básica de información.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card card-outline card-dark h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-cloud fa-3x text-dark mb-3"></i>
                        <h5>Despliegue y Hosting</h5>
                        <p class="text-muted">
                            Publicación de proyectos y configuración inicial
                            de servidores.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="card mt-4 bg-light">
    <div class="card-body text-center">
        <h4>¿Tienes un proyecto en mente?</h4>
        <p class="text-muted">
            Estoy disponible para colaborar en nuevos proyectos y brindar soluciones eficientes.
        </p>
        <a href="{{ url('/contacto') }}" class="btn btn-primary">
            <i class="fas fa-envelope mr-2"></i> Contáctame
        </a>
    </div>
</div>

@stop
