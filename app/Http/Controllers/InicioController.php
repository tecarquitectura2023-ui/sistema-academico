<?php

namespace App\Http\Controllers;

class InicioController extends Controller
{
    public function index()
    {
        $nombreSistema = 'Sistema Académico de gestión de Estudiantes';
        $framework = 'Laravel';
        $periodo = '2026-II';

        // Lista de cursos que se mostrarán en la página
        
$cursos = [
    [
        'nombre' => 'Programación',
        'docente' => 'Por asignar',
        'anio' => '2026'
    ],
    [
        'nombre' => 'Base de Datos',
        'docente' => 'Por asignar',
        'anio' => '2026'
    ],
    [
        'nombre' => 'Desarrollo Web',
        'docente' => 'Por asignar',
        'anio' => '2026'
    ],
];


        return view('inicio', compact(
            'nombreSistema',
            'framework',
            'periodo',
            'cursos'
        ));
    }
}
