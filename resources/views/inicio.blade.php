
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sistema Académico IESTPH</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <!-- ENCABEZADO -->
    <header class="bg-blue-700 text-white shadow-lg">
        <div class="max-w-6xl mx-auto px-6 py-4">

            <div class="flex items-center gap-5">

                <!-- LOGO DEL INSTITUTO -->
                <img
                    src="{{ asset('imagenes/logo.png') }}"
                    alt="Logo del Instituto IESTPH"
                    class="w-20 h-20 md:w-24 md:h-24 object-contain bg-white rounded-full p-1 shrink-0"
                >

                <!-- NOMBRE DEL SISTEMA -->
                <div>
                    <h1 class="text-2xl md:text-3xl font-bold">
                        Sistema Académico del Instituto IESTPH
                    </h1>

                    <p class="text-blue-100 mt-2">
                        Programa de Estudio APSTI
                    </p>
                </div>

            </div>

        </div>
    </header>


    <!-- CONTENIDO PRINCIPAL -->
    <main class="max-w-6xl mx-auto px-6 py-10">

        <div class="bg-white rounded-xl shadow-lg p-8">

            <!-- TITULO Y BOTON -->
            <div class="flex flex-col sm:flex-row justify-between
                        items-start sm:items-center gap-4 mb-6">

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
                    class="bg-blue-600 hover:bg-blue-700 text-white
                           px-5 py-3 rounded-lg font-semibold transition">
                    Ver estudiantes
                </a>

            </div>


            <!-- TABLA DE CURSOS -->
            <div class="overflow-x-auto">

                <table class="w-full border-collapse">

                    <!-- CABECERA DE LA TABLA -->
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


                    <!-- DATOS DE LOS CURSOS -->
                    <tbody>

                        @forelse($cursos as $curso)

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

                        @empty

                            <tr>
                                <td colspan="3"
                                    class="px-6 py-6 text-center text-gray-500">
                                    No hay cursos registrados.
                                </td>
                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </main>


    <!-- PIE DE PAGINA -->
    <footer class="text-center text-gray-500 py-6">

        <p>
            Sistema Académico IESTPH &copy; 2026
        </p>

    </footer>

</body>

</html>
