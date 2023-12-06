<?php

/**
 * Rutas de contacto de la aplicación.
 *
 * @author  luisandev <https://luisan.dev>
 */

use App\Http\Controllers\TermController;
use Illuminate\Support\Facades\Route;

// grupo de rutas para los términos y condiciones
Route::group(['prefix' => 'terms'], function () {
    Route::get('/', [TermController::class, 'show'])->name('terms.show');
});
