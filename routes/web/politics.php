<?php

/**
 * Rutas de políticas de privacidad de la aplicación.
 *
 * @author  luisandev <https://luisan.dev>
 */

use App\Http\Controllers\PrivacyPolicyController;
use Illuminate\Support\Facades\Route;

// grupo de rutas para los términos y condiciones
Route::group(['prefix' => 'politics'], function () {
    Route::get('/', [PrivacyPolicyController::class, 'show'])->name('politics.show');
});
