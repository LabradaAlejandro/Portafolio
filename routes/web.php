<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/perfil', function () {
    return view('Perfil-profesional.perfil-profesional');
})->name('perfil');

Route::get('/habilidades', function () {
    return view('habilidades.habilidades');
})->name('habilidades');

Route::get('/proyectos', function () {
    return view('Proyectos.proyectos');
})->name('proyectos');

Route::get('/servicios', function () {
    return view('Servicios.servicios');
})->name('servicios');

Route::get('/contacto', function () {
    return view('Contacto.contacto');
})->name('contacto');