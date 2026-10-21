
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Estudiantes</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen">
<div class="max-w-5xl mx-auto py-10 px-4">

    <div class="bg-white rounded-xl shadow-lg p-8">
        <h1 class="text-3xl font-bold text-center text-blue-700 mb-2">
            Registro de Estudiantes
        </h1>

        <p class="text-center text-gray-500 mb-8">
            Sistema Académico del Instituto IESTPH
        </p>

        @if (session('success'))
            <p class="bg-green-100 text-green-800 p-3 rounded mb-5">
                {{ session('success') }}
            </p>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 text-red-800 p-3 rounded mb-5">
                <p class="font-semibold">Revisa los siguientes errores:</p>
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('estudiantes.store') }}" method="POST">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

                <div>
                    <label class="block font-semibold mb-2">DNI</label>
                    <input type="text" name="DNI" maxlength="8"
                        value="{{ old('DNI') }}" required
                        class="w-full border rounded-lg px-4 py-2"
                        placeholder="Ingrese el DNI">
                </div>

                <div>
                    <label class="block font-semibold mb-2">Nombre</label>
                    <input type="text" name="nombre"
                        value="{{ old('nombre') }}" required
                        class="w-full border rounded-lg px-4 py-2"
                        placeholder="Ingrese el nombre">
                </div>

                <div>
                    <label class="block font-semibold mb-2">Apellidos</label>
                    <input type="text" name="apellidos"
                        value="{{ old('apellidos') }}" required
                        class="w-full border rounded-lg px-4 py-2"
                        placeholder="Ingrese los apellidos">
                </div>

                <div>
                    <label class="block font-semibold mb-2">Correo</label>
                    <input type="email" name="correo"
                        value="{{ old('correo') }}" required
                        class="w-full border rounded-lg px-4 py-2"
                        placeholder="Ingrese el correo">
                </div>

                <div>
                    <label class="block font-semibold mb-2">Teléfono</label>
                    <input type="text" name="telefono" maxlength="15"
                        value="{{ old('telefono') }}" required
                        class="w-full border rounded-lg px-4 py-2"
                        placeholder="Ingrese el teléfono">
                </div>

                <div>
                    <label class="block font-semibold mb-2">
                        Fecha de nacimiento
                    </label>
                    <input type="date" name="fecha_nacimiento"
                        value="{{ old('fecha_nacimiento') }}"
                        class="w-full border rounded-lg px-4 py-2">
                </div>

            </div>

            <button type="submit"
                class="w-full mt-6 bg-blue-600 text-white font-semibold py-3 rounded-lg hover:bg-blue-700">
                Registrar estudiante
            </button>
        </form>
    </div>

    <div class="bg-white rounded-xl shadow-lg p-8 mt-8">
        <h2 class="text-2xl font-bold text-blue-700 mb-5">
            Estudiantes registrados
        </h2>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border p-3">ID</th>
                        <th class="border p-3">DNI</th>
                        <th class="border p-3">Nombre</th>
                        <th class="border p-3">Apellidos</th>
                        <th class="border p-3">Correo</th>
                        <th class="border p-3">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($estudiantes as $estudiante)
                        <tr>
                            <td class="border p-3">{{ $estudiante->id }}</td>
                            <td class="border p-3">{{ $estudiante->DNI }}</td>
                            <td class="border p-3">{{ $estudiante->nombre }}</td>
                            <td class="border p-3">{{ $estudiante->apellidos }}</td>
                            <td class="border p-3">{{ $estudiante->correo }}</td>
                            <td class="border p-3">{{ $estudiante->estado }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="border p-3 text-center">
                                No hay estudiantes registrados.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
</body>
</html>
