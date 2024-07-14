<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

// Rutas para las vistas del menú
Route::view('/', 'welcome')->name('inicio'); 
Route::view('/empresa', 'empresa')->name('empresa');
Route::view('/contacto', 'contacto')->name('contacto');

// Rutas para el CRUD de persona
Route::resource('persona', PersonaController::class);
Route::get('/personas', [PersonaController::class, 'index'])->name('personas.index');
