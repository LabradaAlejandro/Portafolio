@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h2 class="text-center">¡Bienvenido a mi Portafolio!</h2>
@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-body text-center">
                <div class="text-center">
                    <img src="{{ asset('img/logoperfil.png') }}"
                         class="img-fluid rounded-circle elevation-1 mb-3"
                         style="max-width: 650px;">
                </div>
                <h3 class="font-weight-bold">Hola, soy Alejandro Labrada Muñoz</h3>
                <p class="text-muted">
                    Analista y Desarrollador Web con experiencia en Laravel, PHP, Html, Css, Boostrap, MySQL y JavaScript.
                </p>
                <a href="{{ route('perfil') }}" class="btn btn-primary">
                    <i class="fas fa-fw fa-user"></i> Ver Perfil Profesional
                </a>

            </div>
        </div>
    </div>
</div>
@stop
