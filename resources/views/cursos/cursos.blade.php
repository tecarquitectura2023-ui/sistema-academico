
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro de Cursos</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-2xl mx-auto py-10 px-4">

        <div class="bg-white rounded-xl shadow-lg p-8">

            <h1 class="text-3xl font-bold text-center text-blue-700 mb-2">
                Registro de Cursos
            </h1>

            <p class="text-center text-gray-500 mb-8">
                Sistema Académico del Instituto IESTPH
            </p>

            <form>

                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">
                        Nombre del curso
                    </label>

                    <input
                        type="text"
                        name="nombre"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2"
                        placeholder="Ingrese el nombre del curso">
                </div>

                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">
                        Código del curso
                    </label>

                    <input
                        type="text"
                        name="codigo"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2"
                        placeholder="Ingrese el código del curso">
                </div>

                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">
                        Créditos
                    </label>

                    <input
                        type="number"
                        name="creditos"
                        min="1"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2"
                        placeholder="Ingrese los créditos">
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 font-semibold mb-2">
                        Descripción
                    </label>

                    <textarea
                        name="descripcion"
                        rows="4"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2"
                        placeholder="Describa el curso"></textarea>
                </div>

                <button
                    type="submit"
                    class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700 transition">
                    Registrar curso
                </button>

            </form>

        </div>

    </div>

</body>
</html>
