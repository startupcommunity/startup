<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\LandingController::class, 'index'])
    ->name('landings');

Route::get('investor', [App\Http\Controllers\LandingController::class, 'investor'])
    ->name('landings.investor');

Route::get('startup', [App\Http\Controllers\LandingController::class, 'startup'])
    ->name('landings.startup');

Route::get('professional', [App\Http\Controllers\LandingController::class, 'professional'])
    ->name('landings.professional');

Route::get('/select-role', [App\Http\Controllers\HomeController::class, 'selectRole'])->name('select-role');
Route::get('/pre-register', [App\Http\Controllers\LandingController::class, 'preRegister'])->name('pre-register');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/directory', [App\Http\Controllers\DirectoryController::class, 'index'])
    ->name('directory');
Route::get('/startups/create', [App\Http\Controllers\StartupController::class, 'create'])
    ->name('startup-create');

//Provisional
Route::get('/logout', [App\Http\Controllers\LandingController::class, 'perform']);

// contacto
require __DIR__ . '/web/contact.php';

// términos y condiciones
require __DIR__ . '/web/terms.php';

// engine
require __DIR__ . '/web/engine.php';

// email test
// Route::get('/email-test', function () {
//     // enviar email a luisbarrios0992@gmail.com
//     $data = [
//         'title' => 'Mail from ItSolutionStuff.com',
//         'body' => 'This is for testing email using smtp.'
//     ];
//     $email = new WelcomeMail($data);

//     try {
//         Mail::to('luisbarrios0992@gmail.com')->send($email);
//     } catch (\Exception $e) {
//         return $e->getMessage();
//     }

//     return 'Email enviado';
// })->name('email-test');
