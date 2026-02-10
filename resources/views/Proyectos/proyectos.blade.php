@extends('adminlte::page')

@section('title', 'Proyectos')

@section('content_header')
    <h1 class="text-center">Proyectos</h1>
@stop

@section('content')

<div class="row mb-4">

    <div class="col-md-4">
        <div class="info-box bg-info">
            <span class="info-box-icon"><i class="fas fa-project-diagram"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Total de Proyectos</span>
                <span class="info-box-number">1</span>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="info-box bg-success">
            <span class="info-box-icon"><i class="fas fa-graduation-cap"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Tipo</span>
                <span class="info-box-number">Formativo</span>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="info-box bg-warning">
            <span class="info-box-icon"><i class="fas fa-user"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Rol</span>
                <span class="info-box-number">Desarrollador</span>
            </div>
        </div>
    </div>

</div>

<div class="card shadow mb-4">
    <div class="card-header bg-secondary text-white">
        <h5 class="mb-0">
            <i class="fas fa-map-marked-alt mr-2"></i> Proyecto Destacado
        </h5>
    </div>

    <div class="card-body">
        <div class="row align-items-center">

            <div class="col-md-4 text-center mb-3">
                <img src="{{ asset('img/parchatelogo.png') }}"
                     alt="Logo Párchate"
                     class="img-fluid mb-2"
                     style="max-height:280px;">
            </div>

            <div class="col-md-8">
                <h3 class="text-danger mb-1">Párchate</h3>
                <p class="text-muted">Proyecto Formativo</p>

                <p>
                    <strong>Párchate</strong> es una aplicación web desarrollada como proyecto formativo,
                    orientada a la recomendación de lugares turísticos, culturales y recreativos
                    en la ciudad de <strong>Cali, Valle del Cauca</strong>.
                </p>

                <p>
                    El objetivo principal es facilitar a los usuarios el descubrimiento de nuevos
                    espacios para compartir, brindando información clara y recomendaciones
                    personalizadas según sus intereses.
                </p>

                <div class="mt-2">
                    <span class="badge badge-danger p-2 mb-1">Laravel</span>
                    <span class="badge badge-primary p-2 mb-1">PHP</span>
                    <span class="badge badge-warning p-2 mb-1">JavaScript</span>
                    <span class="badge badge-info p-2 mb-1">MySQL</span>
                    <span class="badge badge-secondary p-2 mb-1">Bootstrap</span>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header bg-info text-white">
        <h5 class="mb-0">
            <i class="fas fa-list-ul mr-2"></i> Funcionalidades Principales
        </h5>
    </div>
    <div class="card-body">
        <ul>
            <li>Listado de lugares turísticos y recreativos en Cali</li>
            <li>Visualización de información detallada por lugar</li>
            <li>Recomendaciones según categorías</li>
            <li>Interfaz amigable y responsive</li>
            <li>Gestión de información desde base de datos</li>
        </ul>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header bg-warning">
        <h5 class="mb-0">
            <i class="fas fa-cogs mr-2"></i> Proceso de Desarrollo
        </h5>
    </div>
    <div class="card-body">
        <div class="timeline">

            <div>
                <i class="fas fa-lightbulb bg-primary"></i>
                <div class="timeline-item">
                    <h3 class="timeline-header">Idea y Análisis</h3>
                    <div class="timeline-body">
                        Definición del problema y análisis de necesidades del usuario.
                    </div>
                </div>
            </div>

            <div>
                <i class="fas fa-pencil-ruler bg-success"></i>
                <div class="timeline-item">
                    <h3 class="timeline-header">Diseño</h3>
                    <div class="timeline-body">
                        Diseño de la estructura, interfaz y flujo de navegación.
                    </div>
                </div>
            </div>

            <div>
                <i class="fas fa-code bg-danger"></i>
                <div class="timeline-item">
                    <h3 class="timeline-header">Desarrollo</h3>
                    <div class="timeline-body">
                        Implementación del sistema usando Laravel y MySQL.
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="card shadow mb-3">
    <div class="card-body text-center">
        <h4>¿Te interesatener tu proyecto?</h4>
        <p class="text-muted">
            Estoy para ayudarte a llevar tu idea a la realidad. Si tienes un proyecto en mente o necesitas asesoría técnica, no dudes en contactarme.
        </p>
        <a href="{{ url('/contacto') }}" class="btn btn-primary">
            <i class="fas fa-envelope mr-2"></i> Contáctame
        </a>
    </div>
</div>

@stop
