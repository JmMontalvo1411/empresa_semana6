<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Http\Requests\PersonaRequest;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('persona.index', compact('personas'));
    }

    public function create()
    {
        return view('persona.create');
    }

    public function store(PersonaRequest $request)
    {
        Persona::create($request->validated());

        return redirect()->route('persona.create')->with('success', 'Persona creada exitosamente');
    }
}
