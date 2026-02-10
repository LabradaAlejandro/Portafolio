@extends('adminlte::page')

@section('title', 'Habilidades')

@section('content_header')
    <h2 class="text-center">Habilidades</h2>
@stop

@section('content')

<p class="text-center text-muted mb-4">
    Estas son las tecnologías y habilidades que he desarrollado durante mi formación académica
    y en proyectos personales, con enfoque en desarrollo web.
</p>

<div class="card shadow mt-3">
    <div class="card-body">
        <div class="row text-center">

            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-outline card-danger h-100">
                    <div class="card-body">
                        <img src="{{ asset('img/skills/laravel.png') }}" class="img-fluid mb-2" style="height: 60px;">
                        <h6 class="mt-2">Laravel</h6>
                        <p class="small text-muted mb-1">Framework backend moderno y robusto</p>
                        <span class="badge badge-info">Nivel: Intermedio</span>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-outline card-primary h-100">
                    <div class="card-body">
                        <img src="{{ asset('img/skills/php.png') }}" class="img-fluid mb-2" style="height: 60px;">
                        <h6 class="mt-2">PHP</h6>
                        <p class="small text-muted mb-1">Lenguaje principal para desarrollo web</p>
                        <span class="badge badge-info">Nivel: Intermedio</span>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-outline card-warning h-100">
                    <div class="card-body">
                        <img src="{{ asset('img/skills/javascript.png') }}" class="img-fluid mb-2" style="height: 60px;">
                        <h6 class="mt-2">JavaScript</h6>
                        <p class="small text-muted mb-1">Interactividad y lógica en el navegador</p>
                        <span class="badge badge-secondary">Nivel: Básico</span>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-outline card-info h-100">
                    <div class="card-body">
                        <img src="{{ asset('img/skills/mysql.png') }}" class="img-fluid mb-2" style="height: 60px;">
                        <h6 class="mt-2">MySQL</h6>
                        <p class="small text-muted mb-1">Gestión de bases de datos relacionales</p>
                        <span class="badge badge-info">Nivel: Intermedio</span>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-outline card-danger h-100">
                    <div class="card-body">
                        <img src="{{ asset('img/skills/html5.png') }}" class="img-fluid mb-2" style="height: 60px;">
                        <h6 class="mt-2">HTML5</h6>
                        <p class="small text-muted mb-1">Estructura moderna de páginas web</p>
                        <span class="badge badge-info">Nivel: Intermedio</span>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-outline card-primary h-100">
                    <div class="card-body">
                        <img src="{{ asset('img/skills/css3.png') }}" class="img-fluid mb-2" style="height: 60px;">
                        <h6 class="mt-2">CSS3</h6>
                        <p class="small text-muted mb-1">Diseño visual y estilos</p>
                        <span class="badge badge-info">Nivel: Intermedio</span>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-outline card-purple h-100">
                    <div class="card-body">
                        <img src="{{ asset('img/skills/bootstrap.png') }}" class="img-fluid mb-2" style="height: 60px;">
                        <h6 class="mt-2">Bootstrap</h6>
                        <p class="small text-muted mb-1">Framework para diseño responsivo</p>
                        <span class="badge badge-info">Nivel: Intermedio</span>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-outline card-dark h-100">
                    <div class="card-body">
                        <img src="{{ asset('img/skills/git.png') }}" class="img-fluid mb-2" style="height: 60px;">
                        <h6 class="mt-2">Git</h6>
                        <p class="small text-muted mb-1">Control de versiones</p>
                        <span class="badge badge-secondary">Nivel: Básico</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="card shadow mt-4">
    <div class="card-header bg-secondary text-white">
        <h5 class="mb-0">
            <i class="fas fa-user-check mr-2"></i> Habilidades Blandas
        </h5>
    </div>
    <div class="card-body">
        <div class="row text-center">

            <div class="col-md-4 mb-3">
                <i class="fas fa-users fa-2x text-primary mb-2"></i>
                <h6>Trabajo en Equipo</h6>
                <p class="small text-muted">
                    Experiencia colaborando en proyectos académicos y formativos.
                </p>
            </div>

            <div class="col-md-4 mb-3">
                <i class="fas fa-lightbulb fa-2x text-warning mb-2"></i>
                <h6>Aprendizaje Continuo</h6>
                <p class="small text-muted">
                    Interés constante en aprender nuevas tecnologías y mejorar habilidades.
                </p>
            </div>

            <div class="col-md-4 mb-3">
                <i class="fas fa-clock fa-2x text-success mb-2"></i>
                <h6>Responsabilidad</h6>
                <p class="small text-muted">
                    Compromiso con el cumplimiento de tareas y objetivos.
                </p>
            </div>

        </div>
    </div>
</div>

<p class="text-center text-muted mt-4">
    Actualmente continúo fortaleciendo estas habilidades a través de práctica constante
    y desarrollo de nuevos proyectos.
</p>

@stop
