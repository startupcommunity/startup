<?php

/**
 * Rutas de contacto de la aplicación.
 *
 * @author  luisandev <https://luisan.dev>
 */

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::resource('contact', ContactController::class)->middleware('guest');

// mensaje de contacto
Route::post('contact/message', [ContactController::class, 'contactMessage'])
  ->name('contact.message');

    // email test
// Route::get('/email-test', function (Request $request) {
//   // enviar email a luisbarrios0992@gmail.com
//   $data = [
//       'name' => $request->name ?? 'Luis Barrios',
//       'email' => $request->email ?? 'luisbarrios0992@gmail.com',
//       'message' => $request->message ?? 'Mensaje de prueba',
//   ];
//   $email = new ContactMessageMail($data);

//   try {
//       Mail::to('luisbarrios0992@gmail.com')->send($email);
//   } catch (\Exception $e) {
//       return $e->getMessage();
//   }

//   return 'Email enviado';
// })->name('email-test');
