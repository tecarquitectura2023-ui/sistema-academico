<?php
// importa el controlador que admnistra las rutas de inicio, estuidante, etc
use App\Http\Controllers\InicioController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;                                         // importa la clase route de laravel para definir las direcciones

Route::get('/', function () {                                                // define la ruta principal del sistema: http:// localhost:8000/
    return view('welcome');                                                  // muestra la vista welcome.blade.php ubicada en resources/views
});

Route::get('/inicio', [InicioController::class, 'index'])                    // Define la ruta /inicio y ejecuta el método index del InicioController.
        ->name('inicio');                                                    // Asigna el nombre "inicio" para identificar esta ruta en Laravel.

Route::get('/estudiantes', [EstudianteController::class, 'index'])           // Define la ruta /estudiantes y ejecuta el método index del EstudianteController.
    ->name('estudiantes.index');                                             // Asigna un nombre que identifica la lista de estudiantes.

    Route::post('/estudiantes', [EstudianteController::class, 'store'])
    ->name('estudiantes.store');

Route::get('/estudiantes/{id}', [EstudianteController::class, 'show'])       // Define la ruta /estudiantes/{id}; {id} representa el identificador del estudiante.
        ->name('estudiantes.show');                                          // Asigna un nombre a la ruta que muestra un estudiante específico.

Route::get('/cursos', [CursoController::class, 'index'])                     // Define la ruta /cursos y ejecuta el método index del CursoController.
        ->name('cursos.index');                                              // Asigna un nombre para identificar la lista de cursos.

Route::get('/cursos/{id}', [CursoController::class, 'show'])                 // Define la ruta /cursos/{id}; {id} representa el identificador del curso.
    ->name('cursos.show');                                                   // Asigna un nombre a la ruta que muestra un curso específico.

