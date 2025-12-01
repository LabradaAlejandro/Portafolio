@extends('adminlte::page')

@section('title', 'Portafolio|Desarrollador')

@section('content_header')
    <h2 class="text-center">Habilidades</h2>
@stop

@section('content')
<!-- Habilidades en Tarjetas -->
<div class="card shadow mt-3">
    <div class="card-body">
        <div class="row text-center">
            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-outline card-danger h-100">
                    <div class="card-body">
                        <img src="{{ asset('img/skills/laravel.png') }}" class="img-fluid mb-2" style="height: 60px;">
                        <h6 class="mt-2">Laravel</h6>
                        <p class="small text-muted">Framework backend moderno y robusto</p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-outline card-primary h-100">
                    <div class="card-body">
                        <img src="{{ asset('img/skills/php.png') }}" class="img-fluid mb-2" style="height: 60px;">
                        <h6 class="mt-2">PHP</h6>
                        <p class="small text-muted">Lenguaje principal para desarrollo web</p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-outline card-warning h-100">
                    <div class="card-body">
                        <img src="{{ asset('img/skills/javascript.png') }}" class="img-fluid mb-2" style="height: 60px;">
                        <h6 class="mt-2">JavaScript</h6>
                        <p class="small text-muted">Interactividad y lógica en el navegador</p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-outline card-info h-100">
                    <div class="card-body">
                        <img src="{{ asset('img/skills/mysql.png') }}" class="img-fluid mb-2" style="height: 60px;">
                        <h6 class="mt-2">MySQL</h6>
                        <p class="small text-muted">Gestión de bases de datos relacionales</p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-outline card-danger h-100">
                    <div class="card-body">
                        <img src="{{ asset('img/skills/html5.png') }}" class="img-fluid mb-2" style="height: 60px;">
                        <h6 class="mt-2">HTML5</h6>
                        <p class="small text-muted">Estructura moderna de páginas web</p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-outline card-primary h-100">
                    <div class="card-body">
                        <img src="{{ asset('img/skills/css3.png') }}" class="img-fluid mb-2" style="height: 60px;">
                        <h6 class="mt-2">CSS3</h6>
                        <p class="small text-muted">Diseño visual y estilos</p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-outline card-purple h-100">
                    <div class="card-body">
                        <img src="{{ asset('img/skills/bootstrap.png') }}" class="img-fluid mb-2" style="height: 60px;">
                        <h6 class="mt-2">Bootstrap</h6>
                        <p class="small text-muted">Framework para diseño responsivo</p>
                    </div>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-outline card-dark h-100">
                    <div class="card-body">
                        <img src="{{ asset('img/skills/git.png') }}" class="img-fluid mb-2" style="height: 60px;">
                        <h6 class="mt-2">Git</h6>
                        <p class="small text-muted">Control de versiones para proyectos</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@stop