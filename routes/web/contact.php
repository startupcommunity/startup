<?php

/**
 * Rutas de contacto de la aplicación.
 *
 * @author  luisandev <https://luisan.dev>
 */
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::resource('contact', ContactController::class)->middleware('guest');
