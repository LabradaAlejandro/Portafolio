@extends('adminlte::page')

@section('title', 'Contacto')

@section('content_header')
    <h1 class="text-center">Contacto </h1>
@stop

@section('content')
<div class="card shadow mt-4 mb-5">
    <div class="card-header bg-primary text-white text-center">
        <h4 class="mb-0">
            <i class="fas fa-address-book mr-2"></i> Contacto
        </h4>
        <small>¿Tienes un proyecto en mente? Hablemos</small>
    </div>

    <div class="card-body">

        <div class="row mb-4">
            <div class="col-12 text-center">
                <p class="lead">
                    Estoy disponible para proyectos de desarrollo web, soporte técnico,
                    automatización de procesos y colaboración profesional.
                </p>
                <p class="text-muted">
                    Si buscas a alguien responsable, con enfoque en calidad y soluciones
                    escalables, este es el lugar correcto.
                </p>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4 mb-3">
                <div class="card card-outline card-info h-100">
                    <div class="card-body">
                        <h6 class="text-info">
                            <i class="fas fa-id-card mr-2"></i> Información
                        </h6>
                        <hr>

                        <p><i class="fas fa-envelope mr-2"></i> labradaalejandro945@gmail.com</p>
                        <p><i class="fas fa-phone mr-2"></i> +57 316 8721412</p>
                        <p><i class="fas fa-map-marker-alt mr-2"></i> Cali, Colombia</p>
                        <p><i class="fas fa-clock mr-2"></i> Lun - Vie (8:00 AM - 6:00 PM)</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card card-outline card-dark h-100">
                    <div class="card-body">
                        <h6 class="text-dark">
                            <i class="fas fa-share-alt mr-2"></i> Redes Profesionales
                        </h6>
                        <hr>

                        <p>
                            <i class="fab fa-github mr-2"></i>
                            github.com/LabradaAlejandro
                        </p>
                        <p>
                            <i class="fas fa-envelope mr-2"></i>
                            labradaalejandro945@gmail.com
                        </p>
                        <p>
                            <i class="fab fa-whatsapp mr-2"></i>
                            WhatsApp Disponible
                        </p>

                        <span class="badge badge-success p-2 mt-2">
                            Disponible para trabajo
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card card-outline card-success h-100">
                    <div class="card-body text-center">
                        <h6 class="text-success">
                            <i class="fas fa-paper-plane mr-2"></i> Escríbeme
                        </h6>
                        <hr>

                        <p class="text-muted">
                            Respondo mensajes en el menor tiempo posible.
                            Hablemos de tu idea o proyecto.
                        </p>

                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=labradaalejandro945@gmail.com"
                            target="_blank"
                            class="btn btn-success btn-block">
                            <i class="fas fa-envelope mr-2"></i> Enviar Correo
                        </a>
                        <a href="https://wa.me/573168721412" target="_blank"
                           class="btn btn-outline-success btn-block mt-2">
                            <i class="fab fa-whatsapp mr-2"></i> WhatsApp
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-4">
            <div class="col-12 text-center">
                <blockquote class="blockquote">
                    <p class="mb-0">
                        “La tecnología bien aplicada convierte ideas en soluciones reales.”
                    </p>
                    <footer class="blockquote-footer mt-1">
                        Alejandro Labrada Muñoz
                    </footer>
                </blockquote>
            </div>
        </div>

    </div>
</div>

@stop