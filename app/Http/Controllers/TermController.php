<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class TermController extends Controller
{
    /**
     * Ver los términos y condiciones.
     *
     * @return View
     */
    public function show(): View
    {
        return view('term.show');
    }
}
