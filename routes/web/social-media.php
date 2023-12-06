<?php

/**
 * Rutas para redes sociales app-media
 *
 * @author  luisandev <https://luisan.dev>
 */

use Illuminate\Support\Facades\Route;

// grupo de rutas para los términos y condiciones
Route::group(['prefix' => 'social-media'], function () {

  // facebook
  Route::get('/facebook', fn () => redirect('https://www.facebook.com/profile.php?id=100090786406058'))
    ->name('app-facebook');

  // instagram
  Route::get('/instagram', fn () => redirect('https://www.instagram.com/the.startupcommunity/'))
    ->name('app-instagram');

  // twitter
  Route::get('/twitter', fn () => redirect('https://twitter.com/'))
    ->name('app-twitter');

  // linkedin
  Route::get('/linkedin', fn () => redirect('https://www.linkedin.com/'))
    ->name('app-linkedin');
});
