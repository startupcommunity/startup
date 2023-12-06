<?php

/**
 * Controlador para las políticas de privacidad
 *
 * @author luisandev <https://luisan.dev>
 */

namespace App\Http\Controllers;

use Illuminate\View\View;

class PrivacyPolicyController extends Controller
{
    public function show(): View
    {
        return view('privacy-policy.show');
    }
}
