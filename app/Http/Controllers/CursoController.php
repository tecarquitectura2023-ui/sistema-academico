<?php

namespace App\Http\Controllers;

class CursoController extends Controller
{
    public function index()
    {
        return view('cursos.cursos');
    }

    public function show($id)
    {
        return 'Curso seleccionado: ' . $id;
    }
}
