@extends('adminlte::page')

@section('title', 'Perfil Profesional')

@section('content_header')
    <h1 class="text-center">Perfil Profesional </h1>
@stop

@section('content')

<div class="row">
    <div class="col-md-4">
        <div class="card card-primary card-outline shadow">
            <div class="card-body box-profile text-center">
                <img class="profile-user-img "
                     src="{{ asset('img/avatar.jpeg') }}"
                     alt="Foto de perfil">
                <h3 class="profile-username mt-2">Alejandro Labrada Muñoz</h3>
                <p class="text-muted">Analista y Desarrollador Web</p>
                <ul class="list-group list-group-unbordered mb-3 text-left">
                    <li class="list-group-item">
                        <b>Experiencia:</b> <span class="float-right">2025 - Actual</span>
                    </li>
                    <li class="list-group-item">
                        <b>Proyectos:</b> <span class="float-right">1</span>
                    </li>
                    <li class="list-group-item">
                        <b>Ubicación:</b> <span class="float-right">Cali-Colombia</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card shadow mt-3">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">
                    <i class="fas fa-user-friends mr-2"></i> Referencias
                </h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <h5 class="mb-1">Maria Alejandra Parra Salgado</h5>
                    <p class="text-muted">Ingeniero de Software</p>
                    <p><i class="fas fa-envelope mr-2"></i> ap9481327@gmail.com</p>
                    <p><i class="fas fa-phone mr-2"></i> +57 300 6924572</p>
                </div>
                <hr>
                <div class="mb-3">
                    <h5 class="mb-1">Juan Esteban Viafara Caicedo</h5>
                    <p class="text-muted">Ingeniero de Software</p>
                    <p><i class="fas fa-envelope mr-2"></i> Estebanviafaracaicedo@gmail.com</p>
                    <p><i class="fas fa-phone mr-2"></i> +57 317 5693237</p>
                </div>
                <hr>
                <div class="mb-3">
                    <h5 class="mb-1">Juan Sebastian Sanchez Ospina</h5>
                    <p class="text-muted">Ingeniero de Software</p>
                    <p><i class="fas fa-envelope mr-2"></i> Ingenierojuansanchez97@gmail.com</p>
                    <p><i class="fas fa-phone mr-2"></i> +57 312 8791554</p>
                </div>
                <hr>
                <div class="mb-1">
                    <h5 class="mb-1">Juan David Brand Sanchez</h5>
                    <p class="text-muted">Ingeniero de Software, Lider de Area</p>
                    <p><i class="fas fa-envelope mr-2"></i> monomonogtao1231@gmail.com</p>
                    <p><i class="fas fa-phone mr-2"></i> +57 316 5819850</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0"><i class="fas fa-user mr-2"></i> Sobre Mí</h5>
            </div>
            <div class="card-body">
                <p>
                    Soy un desarrollador con sólida experiencia en el análisis, diseño y desarrollo 
                    de aplicaciones web, utilizando tecnologías modernas como Laravel, PHP, 
                    JavaScript y bases de datos relacionales. A lo largo de mi trayectoria, he 
                    trabajado en la construcción de sistemas eficientes, modulares y enfocados en la
                    experiencia del usuario, lo que me ha permitido comprender en profundidad todo 
                    el ciclo de vida del desarrollo de software.
                </p>
                <p>
                    Me destaco por mi capacidad para identificar necesidades, transformar requerimientos
                    en soluciones funcionales y optimizar procesos mediante automatización y buenas prácticas
                    de programación. Manejo avanzado de bases
                    de datos, diseño de interfaces responsivas y aplicación de patrones de arquitectura
                    que garantizan escalabilidad y mantenibilidad.
                </p>
                <p>
                    Soy una persona apasionada por la tecnología y la mejora continua. Disfruto aprender nuevas
                    herramientas, mantenerme actualizado con las tendencias del desarrollo y enfrentar retos
                    que me permitan crecer profesionalmente. Me caracterizo por ser responsable, comprometido
                    y orientado a resultados, con un fuerte enfoque en la calidad del código y el trabajo colaborativo.
                </p>
                <p>
                    Mi objetivo es seguir construyendo soluciones digitales que aporten valor, impulsen la eficiencia
                    y generen impacto real en las organizaciones y usuarios finales.
                </p>
            </div>    
        </div>
        <div class="card shadow mt-3">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0"><i class="fas fa-code mr-2"></i> Habilidades Técnicas</h5>
            </div>
            <div class="card-body">
                <span class="badge badge-danger p-2 mb-1">Laravel</span>
                <span class="badge badge-primary p-2 mb-1">PHP</span>
                <span class="badge badge-warning p-2 mb-1">JavaScript</span>
                <span class="badge badge-primary p-2 mb-1">Bootstrap</span>
                <span class="badge badge-info p-2 mb-1">MySQL</span>
                <span class="badge badge-dark p-2 mb-1">Git / GitHub</span>
                <span class="badge badge-secondary p-2 mb-1">HTML5</span>
                <span class="badge badge-primary p-2 mb-1">CSS</span>
            </div>
        </div>
        <div class="card shadow mt-3">
            <div class="card-header bg-warning text-white">
                <h5 class="mb-0"><i class="fas fa-briefcase mr-2"></i> Experiencia Laboral</h5>
            </div>
            <div class="card-body">
                <div class="timeline">
                    <div>
                        <i class="fas fa-laptop-code bg-primary"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fas fa-clock"></i> 2025 - Actual</span>
                            <h3 class="timeline-header"><b>Desarrollador Web</b></h3>
                            <div class="timeline-body">
                                Desarrollo de aplicaciones web completas usando Laravel, PHP, MySQL y JS.
                            </div>
                        </div>
                    </div>
                    <div>
                        <i class="fas fa-database bg-success"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fas fa-clock"></i> 2025 - Actual</span>
                            <h3 class="timeline-header"><b>Analista de Datos</b></h3>
                            <div class="timeline-body">
                                Manejo de bases de datos SQL, creación de reportes y dashboards.
                            </div>
                        </div>
                    </div>
                    <div>
                        <i class="fas fa-brain bg-danger"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fas fa-clock"></i> 2025 - Actual</span>
                            <h3 class="timeline-header"><b>Universidad santiago de cali</b></h3>
                            <div class="timeline-body">
                                Auxiliar de Desarrollo / Soporte. Apoyé procesos de desarrollo, soporte técnico, gestión de información y automatización.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow mt-3 mb-3">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0"><i class="fas fa-graduation-cap mr-2"></i> Educación</h5>
            </div>
            <div class="card-body">
                <p><strong>Tecnólogo en Análisis y Desarrollo de Software</strong></p>
                <p>Servicio Nacional de Aprendizaje - SENA</p>
                <p>2022 - 2025</p>
            </div>
        </div>
    </div>
</div>
@stop
