<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function create()
    {
        return view('persona.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cPerApellido' => 'required|string|max:255',
            'cPerNombre' => 'required|string|max:255',
            'cPerDireccion' => 'required|string|max:255',
            'dPerFechaNac' => 'required|date',
            'nPerEdad' => 'required|integer|min:0',
            'nPerSueldo' => 'required|numeric|min:0',
            'nPerEstado' => 'required|boolean',
        ]);

        Persona::create($validated);

        return redirect()->route('persona.create')->with('success', 'Persona creada exitosamente');
    }
}
