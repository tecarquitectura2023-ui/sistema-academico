<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema Académico</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- Encabezado -->
    <header class="bg-blue-700 text-white shadow-lg">
        <div class="max-w-6xl mx-auto px-6 py-6">

            <h1 class="text-3xl font-bold">
                Sistema Académico del Instituto IESTPH
            </h1>

            <p class="text-blue-100 mt-2">
                Programa de Estudio ASPETIC
            </p>

        </div>
    </header>


    <!-- Contenido -->
    <main class="max-w-6xl mx-auto px-6 py-10">

        <div class="bg-white rounded-xl shadow-lg p-8">

            <div class="flex justify-between items-center mb-6">

                <div>
                    <h2 class="text-2xl font-bold text-gray-800">
                        Cursos
                    </h2>

                    <p class="text-gray-500">
                        Lista de cursos del sistema académico
                    </p>
                </div>

                <a
                    href="/estudiantes"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg font-semibold transition">
                    Ver estudiantes
                </a>

            </div>


            <!-- Tabla -->
            <div class="overflow-x-auto">

                <table class="w-full border-collapse">

                    <thead>
                        <tr class="bg-blue-600 text-white">

                            <th class="px-6 py-4 text-left">
                                Curso
                            </th>

                            <th class="px-6 py-4 text-left">
                                Docente
                            </th>

                            <th class="px-6 py-4 text-left">
                                Año
                            </th>

                        </tr>
                    </thead>


                    <tbody>

                        @foreach($cursos as $curso)

                            <tr class="border-b hover:bg-blue-50">

                                <td class="px-6 py-4 font-semibold text-gray-700">
                                    {{ $curso['nombre'] }}
                                </td>

                                <td class="px-6 py-4 text-gray-600">
                                    {{ $curso['docente'] }}
                                </td>

                                <td class="px-6 py-4 text-gray-600">
                                    {{ $curso['anio'] }}
                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </main>


    <!-- Pie de página -->
    <footer class="text-center text-gray-500 py-6">

        <p>
            Sistema Académico IESTPH © 2026
        </p>

    </footer>

</body>

</html>