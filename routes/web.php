<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/directorios/mostrar',[DirectorioController::class,'mostrarAll'])->name('directorios.mostrar');

Route::get('/directorios/agregar',[DirectorioController::class,'vistaAgregar'])->name('directorios.agregar');

Route::get('/directorios/buscar',[DirectorioController::class,'vistaBuscar'])->name('directorios.buscar');

Route::get('/directorios/contactos/{id}',[ContactoController::class,'vistaContactos'])->name('directorios.contactos');

Route::get('/directorios/eliminar/{id}',[DirectorioController::class,'vistaEliminar'])->name('directorios.eliminar');

Route::get('/directorios/destroy/{id}',[DirectorioController::class,'destroy'])->name('directorios.destroy');

Route::post('/directorios/guardar',[DirectorioController::class,'guardar'])->name('directorios.guardar');

Route::get('/directorios/buscar/dir',[DirectorioController::class,'buscar'])->name('directorios.buscar.dir');

Route::get('/contactos/agregar/{id}',[ContactoController::class,'vistaAgregar'])->name('contactos.agregar');

Route::post('/contactos/guardar',[ContactoController::class,'guardarContacto'])->name('contactos.guardar');


