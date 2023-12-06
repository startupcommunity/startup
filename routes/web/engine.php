<?php

/**
 * Rutas de engine, gestión de usuarios
 *
 * @author  luisandev <https://luisan.dev>
 */

use Illuminate\Support\Facades\Route;

// grupo de rutas para los términos y condiciones
Route::group(['prefix' => 'engine'], function () {
  Route::get('/init', fn () => redirect('https://engine.thestartup-community.com/'))
    ->name('engine.init');
  Route::get('/login', fn () => redirect('https://engine.thestartup-community.com/login'))
    ->name('engine.login');
  Route::get('/register', fn () => redirect('https://engine.thestartup-community.com/register'))
    ->name('engine.register');
});
