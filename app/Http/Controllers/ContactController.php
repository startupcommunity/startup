<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateContactMessageRequest;
use App\Models\Contact;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Devuelve la vista de creación de contacto.
     *
     * @return View
     */
    public function create(): View
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateContactMessageRequest  $request
     * @return JsonResponse
     */
    public function store(CreateContactMessageRequest $request): JsonResponse
    {
        try {
            $contact = Contact::create($request->validated());

            return response()->json([
                'message' => 'Mensaje enviado correctamente',
                'contact' => $contact,
            ], 201);
        } catch (Exception $e) {
            return response()->json($e->getMessage(), 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
