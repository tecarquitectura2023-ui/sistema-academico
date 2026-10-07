<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registro de Estudiantes</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">

    <div class="max-w-2xl mx-auto py-10 px-4">

        <div class="bg-white rounded-xl shadow-lg p-8">

            <h1 class="text-3xl font-bold text-center text-blue-700 mb-2">
                Registro de Estudiantes
            </h1>

            <p class="text-center text-gray-500 mb-8">
                Sistema Académico del Instituto IESTPH
            </p>

            <form>

                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">
                        Nombre
                    </label>

                    <input
                        type="text"
                        name="nombre"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Ingrese el nombre">
                </div>

                <div class="mb-5">
                    <label class="block text-gray-700 font-semibold mb-2">
                        Apellidos
                    </label>

                    <input
                        type="text"
                        name="apellidos"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Ingrese los apellidos">
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 font-semibold mb-2">
                        DNI
                    </label>

                    <input
                        type="text"
                        name="dni"
                        maxlength="8"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
                        placeholder="Ingrese el DNI">
                </div>

                <button
                    type="submit"
                    class="w-full bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700 transition">
                    Registrar estudiante
                </button>

            </form>

        </div>

    </div>

</body>
</html>