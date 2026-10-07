<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $cursos = [
        [
            'nombre' => 'Programación',
            'docente' => 'Profesor 1',
            'anio' => 2026
        ],
        [
            'nombre' => 'Base de Datos',
            'docente' => 'Profesor 2',
            'anio' => 2026
        ],
        [
            'nombre' => 'Desarrollo Web',
            'docente' => 'Profesor 3',
            'anio' => 2026
        ]
    ];

    return view('inicio', compact('cursos'));
});

Route::get('/estudiantes', function () {
    return view('estudiantes');
});