
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Sistema Académico IESTPH</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-gray-100 flex items-center justify-center">

    <div class="bg-white w-full max-w-md p-8 rounded-2xl shadow-lg">

        <h1 class="text-3xl font-bold text-center text-blue-700">
            IESTPH
        </h1>

        <h2 class="text-xl font-semibold text-center mt-2">
            Sistema Académico
        </h2>

        <p class="text-center text-gray-500 mt-1">
            Programa de Estudio ASPETIC
        </p>

        <form class="mt-8">

            <div class="mb-5">
                <label class="block font-semibold text-gray-700 mb-2">
                    Usuario
                </label>

                <input
                    type="text"
                    placeholder="Ingrese su usuario"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <div class="mb-6">
                <label class="block font-semibold text-gray-700 mb-2">
                    Contraseña
                </label>

                <input
                    type="password"
                    placeholder="Ingrese su contraseña"
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <button
                type="submit"
                class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700">
                Iniciar sesión
            </button>

        </form>

    </div>

</body>

</html>
```