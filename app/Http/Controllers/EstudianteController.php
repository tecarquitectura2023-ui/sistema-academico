<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    // Mostrar el formulario y la lista de estudiantes
    public function index()
    {
        $estudiantes = Estudiante::all();

        return view('estudiantes.estudiantes', compact('estudiantes'));
    }

    // Guardar un estudiante en la base de datos
    public function store(Request $request)
    {
        $datos = $request->validate([
            'DNI' => 'required|string|size:8|unique:estudiantes,DNI',
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'correo' => 'required|email|unique:estudiantes,correo',
            'telefono' => 'required|string|max:15|unique:estudiantes,telefono',
            'fecha_nacimiento' => 'nullable|date',
        ]);

        $datos['estado'] = 'activo';

        Estudiante::create($datos);

        return redirect()
            ->route('estudiantes.index')
            ->with('success', 'Estudiante registrado correctamente.');
    }

    // Mostrar un estudiante por su ID
    public function show($id)
    {
        $estudiante = Estudiante::findOrFail($id);

        return $estudiante;
    }
}
